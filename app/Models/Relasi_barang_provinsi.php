<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class relasi_barang_provinsi extends Model
{
    protected $table = 'relasi_barang_provinsi';

    public function atasan()
    {
        return $this->belongsTo(atasan::class);
    }

    public function bawahan()
    {
        return $this->belongsTo(bawahan::class);
    }

    public function aksesoris()
    {
        return $this->belongsTo(aksesoris::class);
    }

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class);
    }
}
