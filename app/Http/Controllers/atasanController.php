<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\atasan;
use App\Models\chart_atasan;

use App\Models\relasi_barang_provinsi;

use App\Models\provinsi;

use Illuminate\Support\Str;

use Validator;

use Illuminate\Validation\Rule;

class atasanController extends Controller
{
    
    public function tabAtasan()
    {
        $provinsi = provinsi::all();
        $data_atasan = atasan::all();
        return view('content.tabAtasan.tabAtasan',compact('data_atasan','provinsi'));
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
        $validation = Validator::make($request->all(), [
            'gambar_atasan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_atasan'   => 'required|max:50',
            'persediaan_atasan' => 'required|integer|min:1',
            'keterangan_atasan' => 'required',
            'idProvinsi_atasan' => 'required',
            'ukuran_atasan' => 'required|not_in:Pilih...',
            'lingkar_badan' => 'required',
            'panjang_lengan' => 'required',
            'lebar_dada' => 'required',
        ]);

        if($validation->passes()){
            $image = $request->file('gambar_atasan');
            $new_name = $request->nama_atasan. rand(0,99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar_atasan'), $new_name);

            $a = new atasan;
            $a->nama_atasan = $request->nama_atasan;
            $a->keterangan_atasan = $request->keterangan_atasan;
            $a->persediaan_atasan = $request->persediaan_atasan;
            $a->gambar_atasan = $new_name;
            $a->save();

            for ($i=0; $i < $request->persediaan_atasan; $i++) { 
                $b = new chart_atasan;
                $b->kode_atasan = $request->kode_atasan[$i];
                $b->ukuran_atasan = $request->ukuran_atasan[$i];
                $b->lingkar_badan = $request->lingkar_badan[$i];
                $b->panjang_lengan = $request->panjang_lengan[$i];
                $b->lebar_dada = $request->lebar_dada[$i];
                $b->atasan()->associate($a);
                $b->save();
            }

            for ($i=0; $i < count($request->idProvinsi_atasan); $i++) { 
                $c = new relasi_barang_provinsi;
                $c->provinsi_id = $request->idProvinsi_atasan[$i];
                $c->atasan()->associate($a);
                $c->save();
            }

            // wajib ada response ini kalau tidak akan error
            return response()->json([
                'message'   => 'Berhasil Input Data '.$request->nama_atasan,
                'result'    => 'success'
            ]);

        }else{

            return response()->json([
                'message'   => $validation->errors()->all(),
                'result'    => 'error'
            ]);
        }

    }

    public function detailUkuranAtasan(Request $request)
    {
        $id = $request->id;

        $detailUkuranAtasan = chart_atasan::where('atasan_id',$id)->get();

        $gambar_atasan = atasan::find($id)->gambar_atasan;

        return view('content.tabAtasan.detailUkuranAtasan',compact('detailUkuranAtasan','gambar_atasan'));
    }
}
