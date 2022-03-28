<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bawahan;
use App\Models\Chart_Bawahan;
use App\Models\Provinsi;
use App\Models\Relasi_barang_provinsi;

use Illuminate\Support\Str;
use Validator;

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
        $validation = Validator::make($request->all(), [
            'gambar_bawahan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validation->passes()){
            $image = $request->file('gambar_bawahan');
            $new_name = $request->nama_bawahan. rand(0,99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar_bawahan'), $new_name);

            $a = new Bawahan;
            $a->nama_bawahan = $request->nama_bawahan;
            $a->keterangan_bawahan = $request->keterangan_bawahan;
            $a->persediaan_bawahan = $request->jumlahBaju;
            $a->gambar_bawahan = $new_name;
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
            // wajib ada response ini kalau tidak akan error
            return response()->json([
                'message'   => 'Berhasil Input Data '.$request->nama_bawahan,
            ]);

        }else{

            return response()->json([
                'message'   => $validation->errors()->all(),
                'uploaded_image' => '',
                'class_name'  => 'alert-danger'
            ]);
        }
    }

    public function detailUkuranBawahan(Request $request)
    {
        $id = $request->id;

        $detailUkuranBawahan = Chart_Bawahan::where('bawahan_id',$id)->get();

        $gambar_bawahan = Bawahan::find($id)->gambar_bawahan;

        return view('content.tabBawahan.detailUkuranBawahan',compact('detailUkuranBawahan','gambar_bawahan'));
    }
}
