<?php namespace App\Http\Controllers\backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\StoreService;
use App\Services\ImgService;


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
        $store_id = $stores->id;
        return view('backend.categorys.index',compact('store_id'));
    }

    public function create()
    {
        $stores = $this->storeService->getLists($this->User()->id);
        $store_id = $stores->id;
        return view('backend.categorys.create',compact('store_id'));
    }

    public function store(Request $request)
    {
        dd(123);
    }
}