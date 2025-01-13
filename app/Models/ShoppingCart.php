<?php

namespace App\Models;

use App\Models\AdminModel\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShoppingCart extends Model
{
    
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
