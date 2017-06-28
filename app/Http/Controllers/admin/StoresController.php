<?php namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;

use Session;
use Input;

use App\Store;

class StoresController extends Controller
{
    public function index()
    {
        return view('admin.stores.index');
    }
        
    public function create()
    {
        return view('admin.stores.create');
    }

}