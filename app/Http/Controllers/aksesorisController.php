<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\aksesoris;
use App\Models\provinsi;
use App\Models\relasi_barang_provinsi;

use Illuminate\Support\Str;
use Validator;

class aksesorisController extends Controller
{
    public function tabAksesoris()
    {
        $data_aksesoris = aksesoris::all();

        $provinsi = provinsi::all();

        $kode = Str::random(5);

        return view('content.tabAksesoris.tabAksesoris',compact('data_aksesoris','kode','provinsi'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'gambar_aksesoris' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_aksesoris'   => 'required|max:50',
            'persediaan_aksesoris' => 'required|integer|min:1',
            'keterangan_aksesoris' => 'required',
            'idProvinsi_aksesoris' => 'required'
        ]);

        if($validation->passes() && $request->persediaan_aksesoris > 0){
            $image = $request->file('gambar_aksesoris');
            $new_name = $request->nama_aksesoris. rand(0,99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar_aksesoris'), $new_name);

            $a = new aksesoris;
            $a->nama_aksesoris = $request->nama_aksesoris;
            $a->kode_aksesoris = $request->kode_aksesoris;
            $a->persediaan_aksesoris = $request->persediaan_aksesoris;
            $a->keterangan_aksesoris = $request->keterangan_aksesoris;
            $a->gambar_aksesoris = $new_name;
            $a->save();

            for ($i=0; $i < count($request->idProvinsi_aksesoris); $i++) { 
                $c = new relasi_barang_provinsi;
                $c->provinsi_id = $request->idProvinsi_aksesoris[$i];
                $c->Aksesoris()->associate($a);
                $c->save();
            }
            // wajib ada response ini kalau tidak akan error
            return response()->json([
                'message'   => 'Berhasil Input Data '.$request->nama_aksesoris,
                'result'    => 'success'
            ]);

        }else{

            return response()->json([
                'message'   => 'Gagal, Isi data dengan lengkap!',
                'result'    => 'error'
            ]);
        }
    }

    public function detailAksesoris(Request $request)
    {
        $id = $request->id;

        $gambar_aksesoris = aksesoris::find($id)->gambar_aksesoris;

        return view('content.tabAksesoris.detailGambarAksesoris',compact('gambar_aksesoris'));
    }
}
