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
            'gambar_aksesoris' => 'required|image|mimes:jpeg,png,jpg,gif',
            'nama_aksesoris'   => 'required|max:50',
            'persediaan_aksesoris' => 'required|integer|min:1',
            'keterangan_aksesoris' => 'required',
            'idProvinsi_aksesoris' => 'required',
            'harga_aksesoris' => 'required|integer|min:1',
        ]);

        if($validation->passes() && $request->persediaan_aksesoris > 0){
            $image = $request->file('gambar_aksesoris');
            $new_name = $request->nama_aksesoris. $request->kode_aksesoris . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar_aksesoris'), $new_name);

            $a = new aksesoris;
            $a->nama_aksesoris = $request->nama_aksesoris;
            $a->golongan_aksesoris = $request->golongan_aksesoris;
            $a->kode_aksesoris = $request->kode_aksesoris;
            $a->persediaan_aksesoris = $request->persediaan_aksesoris;
            $a->keterangan_aksesoris = $request->keterangan_aksesoris;
            $a->harga_aksesoris = $request->harga_aksesoris;
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

    public function storeEdit(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nama_aksesorisEdit'   => 'required|max:50',
            'persediaan_aksesorisEdit' => 'required|integer|min:1',
            'keterangan_aksesorisEdit' => 'required',
            'idProvinsi_aksesorisEdit' => 'required',
            'harga_aksesorisEdit' => 'required|integer|min:1',
        ]);

        $id = $request->idAksesorisEdit;

        if($validation->passes() && $request->persediaan_aksesorisEdit > 0){

            $a = aksesoris::find($id);
            $a->nama_aksesoris = $request->nama_aksesorisEdit;
            $a->golongan_aksesoris = $request->golongan_aksesorisEdit;
            $a->persediaan_aksesoris = $request->persediaan_aksesorisEdit;
            $a->keterangan_aksesoris = $request->keterangan_aksesorisEdit;
            $a->harga_aksesoris = $request->harga_aksesorisEdit;

            if($request->file('gambar_aksesorisEdit')){
                // delete foto
                $gambar = public_path("/gambar_aksesoris/".$a->gambar_aksesoris);
                \File::delete($gambar);
                // upload foto
                $image = $request->file('gambar_aksesorisEdit');
                $new_name = $request->nama_aksesorisEdit. $request->kode_aksesorisEdit . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('gambar_aksesoris'), $new_name);
                $a->gambar_aksesoris = $new_name;
            }

            $a->save();

            relasi_barang_provinsi::where('aksesoris_id',$id)->delete();

            for ($i=0; $i < count($request->idProvinsi_aksesorisEdit); $i++) { 
                $c = new relasi_barang_provinsi;
                $c->provinsi_id = $request->idProvinsi_aksesorisEdit[$i];
                $c->aksesoris()->associate($a);
                $c->save();
            }
            // wajib ada response ini kalau tidak akan error
            return response()->json([
                'message'   => 'Berhasil Input Data '.$request->nama_aksesorisEdit,
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

        $dataAksesoris = aksesoris::find($id);
        $relasiProvinsiAksesoris = relasi_barang_provinsi::where('aksesoris_id',$id)->get();

        return view('content.tabAksesoris.detailGambarAksesoris',compact('dataAksesoris','id','relasiProvinsiAksesoris'));
    }
}
