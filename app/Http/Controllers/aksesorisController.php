<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aksesoris;
use App\Models\Chart_Aksesoris;

use Illuminate\Support\Str;

class aksesorisController extends Controller
{
    public function tabAksesoris()
    {
        $data_aksesoris = Aksesoris::all();

        $kode = Str::random(5);

        return view('content.tabAksesoris.tabAksesoris',compact('data_aksesoris','kode'));
    }

    public function store(Request $request)
    {
        $a = new Aksesoris;
        $a->nama_aksesoris = $request->nama_aksesoris;
        $a->kode_aksesoris = $request->kode_aksesoris;
        $a->persediaan_aksesoris = $request->persediaan_aksesoris;
        $a->keterangan_aksesoris = $request->keterangan_aksesoris;
        $a->save();
    }
}
