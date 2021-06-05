<?php

namespace App\Models\Internal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generator extends Model
{
    use HasFactory;

    //relaciones 1 a 1 inversas
    public function job()
    {
        return $this->belongsTo('App\Models\Internal\Job');
    }
}
