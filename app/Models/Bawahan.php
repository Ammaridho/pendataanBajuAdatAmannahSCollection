<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bawahan extends Model
{
    protected $table = 'Bawahan';

    public function Chart_Bawahan()
    {
        return $this->hasMany(Chart_Bawahan::class);
    }
}
