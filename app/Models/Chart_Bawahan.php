<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chart_bawahan extends Model
{
    protected $table = 'chart_bawahan';

    public function bawahan()
    {
        return $this->belongsTo(bawahan::class);
    }
}
