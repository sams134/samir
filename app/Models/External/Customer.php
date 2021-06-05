<?php

namespace App\Models\External;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // relacion uno a muchos
    public function plants()
    {
        return $this->hasMany('App\Models\External\Plant');
    }
    public function jobs()
    {
        return $this->hasMany('App\Models\Internal\Job');
    }
}
