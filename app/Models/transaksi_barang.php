<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi_barang extends Model
{
    protected $table = 'transaksi_barang';

    public function transaksi_ukuranbarang()
    {
        return $this->hasMany(transaksi_ukuranbarang::class);
    }

    public function transaksi()
    {
        return $this->belongsTo(transaksi::class);
    }

    public $timestamps = false;
}
