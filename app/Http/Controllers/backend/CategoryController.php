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
        dd($stores);
        return view('backend.categorys.create',compact('stores'));
    }

    public function store(Request $request)
    {
        dd(123);
    }
}