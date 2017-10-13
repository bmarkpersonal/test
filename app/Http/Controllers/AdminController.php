<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User as User;
use App\Resource;


class AdminController extends Controller
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
    public function index(Request $request)
    {	
    	$data = 1;
        return view('admin.home', ['data'=>$data] );
    }

    public function test()
    {   
        $data = 1;
        return view('home', ['data'=>$data] );
    }
}
