<?php

namespace App\Http\Controllers\backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\ImgService;
use App\Repositories\BannerRepository;

use App\Store;
use App\Banner;

class BannersController extends Controller
{
    public function __construct(ImgService $imgService, BannerRepository $bannerRepository)
    {
        $this->imgService = $imgService;
        $this->bannerRepository = $bannerRepository;
    }  

    public function index(Request $request)
	{
        $banners = $this->bannerRepository->getList($request->store_id);
        
		return view('backend.banners.index', compact('banners', 'request'));
	}

	public function create(Request $request)
	{
		$store = Store::find($request->store_id);
		$randStr = $this->getRadomStr();

		return view('backend.banners.create', compact('store', 'randStr')); 
	}

	public function store(Request $request)
    {
		try {
			$store = Store::find($request->store_id);
			// 指定cover存放的路徑
			$savePath = $store->alias . '/' . $this->getRadomStr();
			if (Input::hasFile('img')) {
                $img = $this->imgService->saveFile(Input::file('img'), $savePath);
            } else {
                $img = "";
            }
            $banner = new Banner();
            $banner->store_id = $store->id;
			// 處理字串
            $banner->name = $request->name;
            $banner->sort = $request->sort;
            $banner->target = $request->target;
            $banner->img = $img;
            $banner->save();
			// 搬移資料(來源/tmp/$request->tmpPath, 目的/store/$store->alias)
			$result = $this->imgService->move($request->tmpPath, $store->alias);

            return redirect('/backend/stores/'.$store->id.'/banners');
        }
        catch (\Exception $e)
        {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                return redirect('/backend/stores/'.$store->id.'/banners');
            }
        }
	}

    public function destroy($store_id, $banner_id)
    {
        $banner = Banner::find($banner_id);
        $banner->delete();

        return redirect('/backend/stores/'.$store_id.'/banners');
    }

    public function setting(Request $request, $store_id)
    {
        $banner = Banner::find($_SERVER['QUERY_STRING']);
        $banner->name = $request->name;
        $banner->sort = $request->sort;
        $banner->target = $request->target;
        $banner->status = $request->status;
        $banner->update();

        return redirect('/backend/stores/'.$store_id.'/banners');
    }
}
