<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function pref()
    {
        return $this->belongsTo(Pref::class);
    }
}
