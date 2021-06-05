<?php

namespace App\Models\Internal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    use HasFactory;

    // relacion muchos a muchos
    public function jobs()
    {
        return $this->belongsToMany('App\Models\Internal\Job');
    }
}
