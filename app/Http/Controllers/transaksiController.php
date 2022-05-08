<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\transaksi;
use App\Models\customer;

class transaksiController extends Controller
{
    public function lihatTransaksi(Request $request)
    {
        $dataTransaksi = transaksi::join('customer','transaksi.customer_id','=','customer.id')->get();

        return view('content.transaksi.listTransaksi',compact('dataTransaksi'));
    }
}
