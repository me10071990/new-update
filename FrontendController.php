<?php

namespace App\Http\Controllers;
use App\Setting;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
       public function welcome()

    {
        // @TODO Refactor This Line
        return view('welcome')
            ->with('title', Setting::first()->site_name)
            ->with('levels', Category::take(7)->get())
            ->with('levels', Category::take(7)->get())
            ->with('first_post', Post::orderBy('created_at','desc')->first())
            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at','desc')->skip(2)->take(2)->get()->first())
            ->with('forth_post', Post::orderBy('created_at','desc')->skip(3)->take(3)->get()->first())
            ->with('HOME', Category::find(1))
            ->with('ABOUT US', Category::find(2))
            ->with('RESEARCH', Category::find(3))
            ->with('NEWS AND PUBLICATION', Category::find(4))
            ->with('EVENTS', Category::find(5))
            ->with('PEOPLE', Category::find(6))
            ->with('CONTACT US',Category::find(7));
    }

   public function singlePost($slug)

    {
        $post=Post::whereSlug($slug)->first();
        return view('single')->with('post', $post)
                                   ->with('content', $post)
                                   ->with('levels', Category::take(7)->get());
   }

   public function category($slug)

   {
       $category=Category::whereSlug($slug)->firstOrFail();

       $post = Post::where('category_id', $category->id)->first();



       $new_post = Post::where('id', '>', $post->id)
           ->where('category_id', $category->id)
           ->orderBy('id', 'DESC')
           ->get();


       $old_post = Post::where('id', '< ', $post->id)
           ->where('category_id', $category->id)
           ->orderBy('id', 'ASC')
           ->get();



//       $new_post = Post::where('id', '>', $post->id)->orderBy('id', 'desc')->get();
  //     $past_events = Post::where('id', '<', $post->id)->orderBy('id', 'asc')->get();



       return view($category->getTemplateFile())->with('category', $category)
           ->with('title',$category->name)
           ->with('levels', Category::take(7)->get())
           ->with('new_post', $new_post)
           ->with('old_post', $old_post);
   }



}
