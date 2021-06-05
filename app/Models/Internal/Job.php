<?php

namespace App\Models\Internal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public const INV_GOOD = 1;
    public const INV_DAMAGED = 2;
    public const INV_MISSING = 3;
    public const INV_DONT_USE = 4;
    public const INV_TO_EVALUATE= 4;

    public const EQUIPMENT_MOTOR_AC = 1;
    public const EQUIPMENT_MOTOR_DC = 2;
    public const EQUIPMENT_TRANSFORMER = 3;
    public const EQUIPMENT_GENERATOR = 4;
    public const EQUIPMENT_MOTOR_PUMP = 5;
    public const EQUIPMENT_MOTOR_REDUCTOR = 6;
    public const EQUIPMENT_COIL = 7;
    public const EQUIPMENT_ROTOR = 8;
    public const EQUIPMENT_MECHANICAL_PART = 9;
    public const EQUIPMENT_OTHER = 10;

    // relaciones 1 a 1
    public function inventory()
    {
        return $this->hasOne('App\Models\Internal\Inventory');
    }
    public function ac_motor()
    {
        return $this->hasOne('App\Models\Internal\Ac_motor');
    }
    public function dc_motor()
    {
        return $this->hasOne('App\Models\Internal\Dc_motor');
    }
    public function generator()
    {
        return $this->hasOne('App\Models\Internal\Generator');
    }
    public function transformer()
    {
        return $this->hasOne('App\Models\Internal\Transformer');
    }
    public function pump()
    {
        return $this->hasOne('App\Models\Internal\Pump');
    }
    // relacion 1 a muchos inversa
    public function customer()
    {
        return $this->belongsTo('App\Models\External\Customer');
    }
    public function job_type()
    {
        return $this->belongsTo('App\Models\Internal\Job_type');
    }
    public function reason_for_service()
    {
        return $this->belongsTo('App\Models\Internal\Reason_for_service');
    }
    // relaciones muchos a muchos
    public function priorities()
    {
        return $this->belongsToMany('App\Models\Internal\Priority')->withTimestamps();
    }
    public function assignments()
    {
        return $this->belongsToMany('App\Models\User','assignments','job_id','assigned_to_id')->withTimestamps();
    }
}
