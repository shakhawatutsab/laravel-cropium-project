<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){
        return view ('index');
    }
    public function home2(){
        return view('home-2');
    }

    public function contact(){
        return view('contact');
    }

    public function not_found(){
        return view ('404');
    }

    public function about(){
        return view ('about');
    }

    public function portfolio(){
        return view ('portfolio');
    }

    public function service(){
        return view ('service');
    }

    public function service_details(){
        return view ('service_details');
    }


}


