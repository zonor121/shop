<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show(){
        $c = [1 , 2 , 3 , 4 , 5];
        $a = 11;
        $b = 'yello';
        return view('second', compact('a','b', 'c'));
    }
}
