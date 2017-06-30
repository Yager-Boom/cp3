<?php namespace App\Http\Controllers\backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\StoreService;
use App\Repositories\StoreRepository;
use App\Services\ImgService;

use App\Store;
use App\User;

class StoresController extends Controller
{
    public function __construct(StoreService $storeService, ImgService $imgService, StoreRepository $storeRepository)
    {
        $this->middleware('isStore');
		$this->storeService = $storeService;
        $this->imgService = $imgService;
        $this->storeRepository = $storeRepository;
    }
    
    public function index() //商家Dashboard
    {   
        $stores = $this->StoreLists();  
        return view('backend.stores.index', compact('stores'));
    }
    
    public function show($storeId) //商店Dashboard
    {
        // object
        $store = $this->StoreInfo($storeId);

        if($store->isEmpty())
        {
            return redirect('/backend');
        }

        // obj -> array
        $store = $this->StoreInfo($storeId)->first();

        return view('backend.stores.show', compact('store'));
    }

    public function create()
    {
        return view('backend.stores.create');
    }

    public function store(Request $request)
    {
        try{
            $user = $this->user();
            if (Input::hasFile('logo'))
            {
                $logo = $this->imgService->savelogo(Input::file('logo'));
            }
            else
            {
                $logo = "";
            }
            $store = new Store(array(
                'domain' => $request->domain,
                'shippingfree' => $request->shippingfree,
                'fee' => $request->fee,
                'logo' => $logo
            ));
            $store = $user->stores()->save($store);

            return redirect('/backend');
        }
        catch (\Exception $e)
        {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062)
            {
                return redirect('/backend');
            }
        }
    }

    public function edit()
    {
        return view('');
    }

}