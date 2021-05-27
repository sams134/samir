<?php

namespace App\Models\External;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo('App\Models\External\Customer');
    }
    public function areas()
    {
        return $this->hasMany('App\Models\External\Area');
    }
}
