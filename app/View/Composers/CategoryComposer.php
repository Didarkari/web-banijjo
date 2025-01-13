<?php

namespace App\View\Composers;

use App\Models\AdminModel\Category;
use App\Models\Post;
use Illuminate\View\View;

class CategoryComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
      $categories = Category::with('subCategories')->withCount('subCategories')->orderByDesc('order')->where('status', 1)->get(); 
      
        $view->with('categories', $categories);
    }
}