<?php

namespace App\Models\AdminModel;

use App\Models\User;
use App\Models\AdminModel\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    public function category(): BelongsTo
{
    // return $this->belongsTo(Category::class);
    
    return $this->belongsTo(Category::class);
}

}
