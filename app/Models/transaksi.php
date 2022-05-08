<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';

    public function transaksi_barang()
    {
        return $this->hasMany(transaksi_barang::class);
    }
}
