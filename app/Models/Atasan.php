<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atasan extends Model
{
    protected $table = 'Atasan';

    public function Chart_Atasan()
    {
        return $this->hasMany(Chart_Atasan::class);
    }

    // public function transaksi()
    // {
    //     return $this->belongsTo(transaksi::class);
    // }
}
