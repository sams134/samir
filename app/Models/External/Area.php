<?php

namespace App\Models\External;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function plant()
    {
        return $this->belongsTo('App\Models\External\Plant');
    }
    public function machines()
    {
        return $this->hasMany('App\Models\External\Machine');
    }
}
