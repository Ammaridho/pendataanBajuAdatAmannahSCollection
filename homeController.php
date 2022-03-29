<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\atasan;

class homeController extends Controller
{
    public function layout()
    {  
        return view('layouts.layout');
    }

    public function indexHome()
    {  
        $a = atasan::find(1);
        return view('content.indexHome',compact('a'));
    }

    public function inputData(Request $reqeust)
    {
        return view('content.inputDataHome');
    }
}
