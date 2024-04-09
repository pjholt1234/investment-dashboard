<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

abstract class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'price_per_unit',
        'quantity',
    ];

    public function priceHistory(): HasMany
    {
        return $this->hasMany(PriceHistory::class);
    }

    public function stockHistory(): HasMany
    {
        return $this->hasMany(StockHistory::class);
    }
}
