<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTemplate extends Model
{
    protected $table = 'category_templates'; // here set table's name
    protected $primaryKey = 'id'; // here set table's primary Key field name
    protected $fillable = [ 'id', 'name' ]; // here set all table's fields name



    // Retrieve all categories using this template_id as id
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
