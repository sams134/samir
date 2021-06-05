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
    // relaciones muchos a muchos
    public function priorities()
    {
        return $this->belongsToMany('App\Models\Internal\Priority')->withTimestamps();
    }
}
