<?php

namespace App\Http\Controllers;
use App\Role;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
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
        $helloWorld =auth()->user()->nom;

        return view('home',Array("HelloWorld" => $helloWorld));
    }
}
