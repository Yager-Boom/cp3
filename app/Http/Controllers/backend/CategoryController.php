<?php namespace App\Http\Controllers\backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\StoreService;
use App\Services\ImgService;

use App\Store;

class CategoryController extends Controller
{
    public function __construct(StoreService $storeService, ImgService $imgService)
    {
        $this->middleware('isStore');
        $this->storeService = $storeService;
        $this->imgService = $imgService;
    }

    function index()
    {
        $stores = $this->storeService->getLists($this->User()->id);
        return view('backend.categorys.index',compact('stores'));
    }

    public function create(Request $request)
    {
        $stores = Store::find($request->store_id);
        return view('backend.categorys.create',compact('stores'));
    }

    public function store(Request $request)
    {
        try
        {
            $now = date("Y/m/d H:i");
            \DB::table('navs')
               ->insert([
                'store_id' => $request['store_id'],
                'link' => $request['link'],
                'position' => $request['position'],
                'nitem' => $request['nitem'],
                'sort' => $request['sort'],
                'created_at' => $request['created_at']
            ]);
        }
        catch (\Exception $e)
        {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                return redirect('/backend');
            }
        }
    }
}