<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chart_atasan extends Model
{
    protected $table = 'chart_atasan';

    public function atasan()
    {
        return $this->belongsTo(atasan::class);
    }
}
