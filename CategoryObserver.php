<?php

namespace App\Observers;

use App\Category;
use Illuminate\Support\Str;

class CategoryObserver {

    /*
     * This triggers whenever a category is being created
     * BEFORE it is saved to the database
     *
     * So now whenever a new category is being created
     * this is running before saving to the DB
     */
    public function creating(Category $category)
    {
        $category->slug = Str::slug($category->name);
    }


}
