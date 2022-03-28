<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class berandaController extends Controller
{
    public function tabBeranda(Request $request)
    {
        return view('content.tabBeranda.tabBeranda');
    }
}
