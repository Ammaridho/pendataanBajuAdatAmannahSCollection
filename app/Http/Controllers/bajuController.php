<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bajuController extends Controller
{
    public function dataBaju(Request $request) 
    {
        return view('dataBaju.dataBaju');
    }
}
