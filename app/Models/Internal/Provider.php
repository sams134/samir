<?php

namespace App\Models\Internal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
     //relacion muchos a muchos
     public function materials()
     {
         return $this->belongsToMany('App\Models\Internal\Material');
     }
}
