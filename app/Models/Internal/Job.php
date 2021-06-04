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

}
