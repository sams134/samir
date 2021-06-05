<?php

namespace App\Models\Internal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pump extends Model
{
    use HasFactory;

    public const PUMP_TYPE_CENTRIFUGAL = 1;
    public const PUMP_TYPE_SUBMERSIBLE = 2;
    public const PUMP_TYPE_MULTISTAGE = 3;
    public const PUMP_TYPE_OTHER = 4;

    public function job()
    {
        return $this->belongsTo('App\Models\Internal\Job');
    }
}
