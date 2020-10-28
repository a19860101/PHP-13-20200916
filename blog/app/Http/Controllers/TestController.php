<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function show(){
        return view('test');
    }
    function wow(){
        // return 'WOW!!!';
        return view('wow');
    }
}
