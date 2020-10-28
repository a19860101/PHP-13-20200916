<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function show($id){
        return view('test',['id'=>$id]);
    }
    function wow($id){
        // return 'WOW!!!';
        return view('wow',['id'=>$id]);
    }
}
