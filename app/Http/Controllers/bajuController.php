<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\atasan;
use App\Models\chart_atasan;
use App\Models\bawahan;
use App\Models\chart_bawahan;
use App\Models\aksesoris;
use App\Models\relasi_barang_provinsi;

use App\Models\baju;

class bajuController extends Controller
{
    public function index(Request $request) 
    {
        $dataLengkapAtasan = atasan::join('chart_atasan', 'chart_atasan.atasan_id' , '=', 'atasan.id')
                            ->join('relasi_barang_provinsi', 'relasi_barang_provinsi.atasan_id', '=', 'atasan.id')
                            ->get();

        $dataAtasan = atasan::all();

        return view('dataBaju.dataBaju',compact('dataAtasan'));
    }
}
