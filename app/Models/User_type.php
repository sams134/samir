<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    use HasFactory;

    // relacion 1 a muchos
    public function user()
    {
        return $this->hasMany('App\Models\User');
    }
}
