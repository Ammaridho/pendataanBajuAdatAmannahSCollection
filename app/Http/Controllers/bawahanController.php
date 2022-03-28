<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bawahan;
use App\Models\Chart_Bawahan;
use App\Models\Provinsi;
use App\Models\Relasi_barang_provinsi;

use Illuminate\Support\Str;

class bawahanController extends Controller
{
    public function tabBawahan()
    {
        $provinsi = Provinsi::all();
        $data_bawahan = Bawahan::all();
        return view('content.tabBawahan.tabBawahan',compact('data_bawahan','provinsi'));
    }

    public function formUkuranBawahan(Request $request)
    {
        $jb = $request->jb;

        for ($i=0; $i < $jb; $i++) { 
            $kode[$i] = Str::random(5);
        }

        return view('content.tabBawahan.ukuranBawahan',compact('jb','kode'));
    }

    public function store(Request $request)
    {
        $a = new Bawahan;
        $a->nama_bawahan = $request->nama_bawahan;
        $a->keterangan_bawahan = $request->keterangan_bawahan;
        $a->persediaan_bawahan = $request->jumlahBaju;
        $a->save();

        for ($i=0; $i < $request->jumlahBaju; $i++) { 
            $b = new Chart_Bawahan;
            $b->kode_bawahan = $request->kode_bawahan[$i];
            $b->ukuran_bawahan = $request->ukuran_bawahan[$i];
            $b->lingkar_pinggang = $request->lingkar_pinggang[$i];
            $b->panjang_kaki = $request->panjang_kaki[$i];
            $b->Bawahan()->associate($a);
            $b->save();
        }

        for ($i=0; $i < count($request->idProvinsi_bawahan); $i++) { 
            $c = new Relasi_barang_provinsi;
            $c->provinsi_id = $request->idProvinsi_bawahan[$i];
            $c->Bawahan()->associate($a);
            $c->save();
        }
    }

    public function detailUkuranBawahan(Request $request)
    {
        $id = $request->id;

        $detailUkuranBawahan = Chart_Bawahan::where('bawahan_id',$id)->get();

        return view('content.tabBawahan.detailUkuranBawahan',compact('detailUkuranBawahan'));
    }
}
