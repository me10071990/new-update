<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $dates=['created_at', 'updated_at', 'deleted_at'];

    protected $fillable=[ 'title','content','category_id','featured','slug', 'file','link', 'date_time', 'sub_category_id'];

    public function category()

    {
        return $this->belongsTo('App/Category');
    }



    public function getFeaturedAttribute($featured)
    {
        return $featured ? asset($featured) : null;
    }



}
