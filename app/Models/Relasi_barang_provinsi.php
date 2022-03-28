<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relasi_barang_provinsi extends Model
{
    protected $table = 'Relasi_barang_provinsi';

    public function Atasan()
    {
        return $this->belongsTo(Atasan::class);
    }

    public function Bawahan()
    {
        return $this->belongsTo(Bawahan::class);
    }

    public function Aksesoris()
    {
        return $this->belongsTo(Aksesoris::class);
    }

    public function Provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }
}
