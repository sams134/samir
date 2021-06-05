<?php

namespace App\Models\Internal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material_type extends Model
{
    use HasFactory;
   public function materials()
   {
       return $this->hasMany('App\Models\Internal\Material');
   }
}
