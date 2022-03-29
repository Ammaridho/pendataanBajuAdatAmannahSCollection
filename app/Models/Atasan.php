<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class atasan extends Model
{
    protected $table = 'atasan';

    public function chart_atasan()
    {
        return $this->hasMany(chart_atasan::class);
    }

    // public function transaksi()
    // {
    //     return $this->belongsTo(transaksi::class);
    // }
}
