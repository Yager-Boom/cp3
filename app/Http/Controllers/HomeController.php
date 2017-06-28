<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;

class HomeController extends Controller
{
    protected $storeRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $level = User::find(Auth::id())->level;
        switch ($level) {
            case '3':
                return redirect("/admin");
                break;

            case '2':
                return redirect("/backend");
                break;
            
            default:
                return redirect("/member");
                break;
        }
    }
}
