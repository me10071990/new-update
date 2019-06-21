<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index($slug)
    {
        $post=Post::where('slug',   $slug)->first();
        $new_post=Post::where('date_time', '<', Carbon::now())->orderBy('date_time', 'asc')->get();
        $old_post=Post::where('date_time', '>', Carbon::now())->orderBy('date_time', 'desc')->get();

        //Post::where('date_time', '<=', Carbon::now()->subDays(1))->delete();


        return view('layouts.categories.events_blade')

                ->with('post', $post)
                ->with('levels', Category::take(7)->get())
                ->with('events_blade',Category::find(7))
                ->with('new_post', Post::find($new_post))
                ->with('old_post', Post::find($old_post));


    }
}
