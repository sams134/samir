<?php

namespace App\Models\Internal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reason_for_service extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany('App\Models\Internal\Job');
    }
}
