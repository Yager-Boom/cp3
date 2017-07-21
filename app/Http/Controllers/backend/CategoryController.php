<?php namespace App\Http\Controllers\backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\ImgService;


class CategoryController extends Controller
{
    function index(){
        return view('backend.categorys.index');
    }

    public function create()
    {
        $aaa = 123;
        return view('backend.categorys.create',compact('aaa'));
    }

    public function store(Request $request)
    {
        $user = $this->user();
        $id = $user->id;
        dd($request,$id);
    }
}