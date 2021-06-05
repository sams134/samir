<?php

namespace App\Models\External;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;
    public const SINGLE_PHASE = 1;
    public const THREE_PHASE = 2;
    public const DC_MOTOR = 3;
    public const SERVO = 4;

    public const HP = 1;
    public const KW = 2;
    public const KVA = 3;
    public const WATTS = 4;
    public const TORQUE = 5;

    public const REALHP = 1;
    public const APROXHP = 0;
    
    public function machine()
    {
        return $this->belongsTo('App\Models\External\Machine');
    }
}
