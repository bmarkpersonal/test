<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User as User;
use App\Resource;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
    	
        return view('home', ['data'=>$data] );
    }

    public function test()
    {   
        $data = 1;
        return view('home', ['data'=>$data] );
    }
}
