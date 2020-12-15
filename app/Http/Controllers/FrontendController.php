<?php

namespace App\Http\Controllers;

use App\About;
use App\Homepage;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $data['homepages'] = Homepage::where('status', 'active')->limit(1)->get();
        $data['abouts'] = About::where('status', 'active')->limit(1)->get();
        return view('frontend.home', $data);
    }
}
