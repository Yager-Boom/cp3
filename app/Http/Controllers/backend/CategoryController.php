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
        $store = $this->storeService->getLists($this->User()->id);
        dd($store);
        return view('backend.categorys.index',compact('store'));
    }

    public function create()
    {
        $store = $this->storeService->getLists($this->User()->id);
        return view('backend.categorys.create',compact('store'));
    }

    public function store(Request $request)
    {
        dd(123);
    }
}