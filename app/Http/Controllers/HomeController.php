<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('authn');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function get()
    {
        $app = User::all();
        $get = DB::table('db_org_medialog')->where('user_id', '=', Auth::user()->id)->get();

        return view('data1')->with('app', $app)->with('get', $get);
    }
}
