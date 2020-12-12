<?php

namespace App\Http\Controllers;

use App\About;
use App\Homepage;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['homepages'] = Homepage::where('status', 'active')->limit(1)->get();
        $data['abouts'] = About::where('status', 'active')->limit(1)->get();
        return view('frontend.home', $data);
    }




}
