<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home0267");
    }
    public function artikel(){
        return view("artikel0267");
    }
    public function contact(){
        return view("contact0267");
    }
}
