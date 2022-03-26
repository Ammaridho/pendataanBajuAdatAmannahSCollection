<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chart_Atasan extends Model
{
    protected $table = 'Chart_Atasan';

    public function Atasan()
    {
        return $this->belongsTo(Atasan::class);
    }
}
