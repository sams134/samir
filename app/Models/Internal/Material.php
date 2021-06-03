<?php

namespace App\Models\Internal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    public const PRODUCT_RE_SELL_RAW_MATERIAL = 1;
    public const PRODUCT_RE_SELL_PRODUCT = 2;
    public const PRODUCT_BUYABLE_RAW_MATERIAL = 3;
    public const PRODUCT_BUYABLE_INPUT = 4; // INSUMO CONSUMO, 
    public const PRODUCT_SELLABLE = 5; // PRODUCTO FABRICADO

    //relacion muchos a muchos
    public function providers()
    {
        return $this->belongsToMany('App\Models\Internal\Provider');
    }
}
