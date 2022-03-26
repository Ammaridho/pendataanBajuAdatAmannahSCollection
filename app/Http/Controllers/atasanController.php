<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Atasan;
use App\Models\Chart_Atasan;

use Illuminate\Support\Str;

class atasanController extends Controller
{
    
    public function tabAtasan()
    {
        $data_atasan = atasan::all();
        return view('content.tabAtasan.tabAtasan',compact('data_atasan'));
    }

    public function formUkuranAtasan(Request $request)
    {
        $jb = $request->jb;

        for ($i=0; $i < $jb; $i++) { 
            $kode[$i] = Str::random(5);
        }

        return view('content.tabAtasan.ukuranAtasan',compact('jb','kode'));
    }

    public function store(Request $request)
    {
        $a = new Atasan;
        $a->nama_atasan = $request->nama_atasan;
        $a->keterangan_atasan = $request->keterangan_atasan;
        $a->persediaan_atasan = $request->jumlahBaju;
        $a->save();

        for ($i=0; $i < $request->jumlahBaju; $i++) { 
            $b = new Chart_Atasan;
            $b->kode_atasan = $request->kode_atasan[$i];
            $b->ukuran_atasan = $request->ukuran_atasan[$i];
            $b->lingkar_badan = $request->lingkar_badan[$i];
            $b->panjang_lengan = $request->panjang_lengan[$i];
            $b->lebar_dada = $request->lebar_dada[$i];
            $b->Atasan()->associate($a);
            $b->save();
        }
    }

    public function detailUkuranAtasan(Request $request)
    {
        $id = $request->id;

        $detailUkuranAtasan = Chart_Atasan::where('atasan_id',$id)->get();

        return view('content.tabAtasan.detailUkuranAtasan',compact('detailUkuranAtasan'));
    }
}
