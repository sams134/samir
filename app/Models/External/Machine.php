<?php

namespace App\Models\External;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo('App\Models\External\Area');
    }
    public function statuses()
    {
        return $this->belongsToMany('App\Models\External\Status');
    }
    public function motors()
    {
        return $this->hasMany('App\Models\External\Motor');
    }
    public function photos()
    {
        return $this->morphMany('App\Models\Photo','photoable');
    }
}
