<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $variable = "Hello from Routes from the Hello Controller - SubView.";
        return view('subviews.hello', ['someData' => $variable]);
        //return view('home');
    }

    public function home()
    {
        $variable1 = "Hello from Routes from the Hello Controller Home.Blade. SomeData1";
        return view('home', ['someData1' => $variable1]);
    }

    public function about()
    {
        return view('about');
    }



}
