<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function layout()
    {  
        return view('layouts.layout');
    }

    public function indexHome()
    {  
        return view('content.indexHome');
    }

    public function inputData(Request $reqeust)
    {
        return view('content.inputDataHome');
    }
}
