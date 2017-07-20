<?php namespace App\Http\Controllers\backend;
use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\StoreService;
use App\Services\ImgService;
use App\Store;
use App\User;
class StoresController extends Controller
{
    public function __construct(StoreService $storeService, ImgService $imgService)
    {
        $this->middleware('isStore');
        $this->storeService = $storeService;
        $this->imgService = $imgService;
    }

    public function index() //商家Dashboard
    {
        $stores = $this->storeService->getLists($this->User()->id);
        return view('backend.stores.index', compact('stores'));
    }

    public function show($storeId) //商店Dashboard
    {
        // object
        $store = $this->storeService->getOne($this->User()->id, $storeId);
        if($store->isEmpty())
        {
            return redirect('/backend');
        }
        // obj -> array
        $store = $store->first();
        return view('backend.stores.show', compact('store'));
    }
    public function create()
    {
        return view('backend.stores.create', compact('randStr'));
    }
    /**
     * s1處理基本資料, s2處理圖片不為空則帶storeId
     * move /tmp/$tmpPath /imgs/store/$storeId/$tmpPath
     * @param  string  $tmpPath, $storeId
     * @return stores
     */
    public function store(Request $request)
    {
        try {
            $user = $this->user();
            $randStr = $this->getRadomStr();
            if (Input::hasFile('file')) {
                $logo = $this->imgService->saveFile(Input::file('file'), $randStr);
            } else {
                $logo = "";
            }
            $store_arr = new Store(array(
                'domain' => $request->domain,
                'alias' => $randStr,
                'logo' => $logo
            ));
            // dd($store_arr);
            $store = $user->stores()->save($store_arr);
            return redirect('/backend');
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