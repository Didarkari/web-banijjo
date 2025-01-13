<?php

namespace App\Models\AdminModel;

use App\Models\AdminModel\Product;
use App\Models\AdminModel\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Controllers\AdminController\ProductController;

class Category extends Model
{
    use HasFactory;

    public function subCategories() : HasMany
    {
        return $this->hasMany(SubCategory::class);
        
    }
    public function products() : HasMany
    {
        return $this->hasMany(Product::class);
        
    }
}
