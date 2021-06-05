<?php

namespace App\Models\Internal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_type extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany('App\Models\Internal\Job');
    }
}
