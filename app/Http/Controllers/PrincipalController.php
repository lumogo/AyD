<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PrincipalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	return view('Principal')->with('title',"Cadmio");
    }
  
}