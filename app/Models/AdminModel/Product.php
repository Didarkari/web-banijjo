<?php

namespace App\Models\AdminModel;

use App\Models\AdminModel\Upload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function images(): HasMany
    {
        return $this->hasMany(Upload::class, 'product_id', 'id');
    }


    public function firstImage()
    {
        return $this->hasOne(Upload::class, 'product_id', 'id');
    }

   
}
