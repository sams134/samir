<?php

namespace App\Models\Materials;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bearing extends Model
{
    use HasFactory;
    public const SEALS_NO_SEAL = 0;
    public const SEALS_ZZ = 1;
    public const SEALS_2RS1 = 2;
    public const SEALS_Z = 3;
    
    public const RADIAL_CLERANCE_C2 = 0;
    public const RADIAL_CLERANCE_C3 = 1;
    public const RADIAL_CLERANCE_C4 = 2;


}
