<?php namespace App\Http\Controllers\backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\ImgService;


class CategoryController extends Controller
{
    function index()
    {
        $user = $this->user();
        $store_id = 1;
        return view('backend.categorys.index',compact('store_id'));
    }

    public function create()
    {
        return view('backend.categorys.create');
    }

    public function store(Request $request)
    {
        dd(123);
    }
}