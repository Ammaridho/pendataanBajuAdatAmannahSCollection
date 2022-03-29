<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bawahan extends Model
{
    protected $table = 'bawahan';

    public function chart_bawahan()
    {
        return $this->hasMany(chart_bawahan::class);
    }
}
