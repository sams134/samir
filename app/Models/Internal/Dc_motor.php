<?php

namespace App\Models\Internal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dc_motor extends Model
{
    use HasFactory;

    public const CONNECTION_SERIAL = 1;
    public const CONNECTION_SHUNT = 2;
    public const CONNECTION_COMPOUND = 3;
}
