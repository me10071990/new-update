<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\CategoryTemplate;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // During Testing you will use the seeder.. it's awesome...

        // First create the blade file you want to use for the template in...
        // layouts.categories -> whatever.blade.php

        // Create a new CategoryTemplate 'name' => whatever.blade.php
        // Assign that to a variable

        // Use that variable as template_id for the category seeder

        // php artisan migrate:refresh --seed // will roll back and recreate db and seed it...

        \DB::table('categories')->delete();
        \DB::table('category_templates')->delete();

        $home_template = CategoryTemplate::create([ 'name' => 'home_template' ]);
        $blue_theme_template = CategoryTemplate::create([ 'name' => 'blue_template' ]);

       
        $events_blade=CategoryTemplate::create(['name'=>'events_blade']);

        $people_template=CategoryTemplate::create(['name'=>'people_template']);

        $contact_template=CategoryTemplate::create(['name'=>'contact_template']);




        Category::create([ 'name' => 'Home' , 'template_id' => $home_template->id ]);
        Category::create([ 'name' => 'ABOUT US', 'template_id' => $blue_theme_template->id ]);
       
        Category::create([ 'name' => 'EVENTS','template_id'=>$events_blade->id ]);
        Category::create([ 'name' => 'PEOPLE','template_id'=>$people_template->id]);
        Category::create([ 'name' => 'CONTACT US', 'template_id'=>$contact_template->id]);

    }
}
