<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chart_Bawahan extends Model
{
    protected $table = 'Chart_Bawahan';

    public function Bawahan()
    {
        return $this->belongsTo(Bawahan::class);
    }
}
