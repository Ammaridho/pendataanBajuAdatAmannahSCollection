<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi_ukuranbarang extends Model
{
    protected $table = 'transaksi_ukuranbarang';

    public function transaksi_barang()
    {
        return $this->belongsTo(transaksi_barang::class);
    }

    public $timestamps = false;
}
