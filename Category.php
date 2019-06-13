<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{

    protected $table = 'categories'; // here set table's name
    protected $primaryKey = 'id'; // here set table's primary Key field name
    protected $fillable = [ 'id', 'template_id', 'name','parent_id' ]; // here set all table's fields name




    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    // Associate template_id with CategoryTemplate Model
    public function template()
    {
        return $this->belongsTo(CategoryTemplate::class)
            ->withDefault([ 'name' => 'default_category_template' ]);
    }

    public function getTemplateFile()
    {
        // Note: if template relationship exists, will use it...
        // else it will use the default 'default_category_template'

        return 'layouts.categories.' . $this->template->name;
    }





    public function children() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }







}
