<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use App\Post;
use Carbon\Carbon;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $category = Category::with('posts')->findOrFail(request('category_id'));

        return view('admin.posts.index')

        ->with('category', $category);


           // ->with('subcategory', $subcategory);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories=Category::where(['parent_id'=>0])->get();
        $categories_dropdown="<option selected disabled>select</option>";
        foreach ($categories as $cat)
        {
            $categories_dropdown .= "<option value= '".$cat->id."'>" .$cat->name."</options>";

            $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
            foreach ($sub_categories as $sub_cat)
            {
                $categories_dropdown .= "<option value= '".$sub_cat->id."'> &nbsp;--  &nbsp;".
                $sub_cat->name."</option>";
            }
        }

        $levels=Category::all();

        if($levels->count()==0 )
        {

           Session::flash('info', 'You must have to Create Menu before Creating blog ');

        }
        //positionClass:"toast-top-right
       elseif($levels)
        {
            Session::flash('info', 'Please Be Sure you have selected Correct and Particular Menu for Blog');
        }
        return view('admin.posts.create')->with('levels', $levels)->with(compact('categories_dropdown'));
        ;

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $this->validate($request, [


            'title' =>'required',
            'link'=>'required',
            'date_time'=>'required',
            'featured'=>'mimes:jpeg,pdf,docx,png:5000',
            'file'=>'mimes:jpeg,pdf,docx,png:5000',
            'content'=>'required',
            'category_id'=>'required',
        ]);

        // Create Initial Required Data Array
        $data = [

            'link'=>$request->link,
            'title'=>$request->title,
            'content'=>$request->content,
            'category_id'=>$request->category_id,
            'slug'=>str_slug($request->title),

            $date = date('Y-m-d H:i:s'),
             $date_time = Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('d-m-Y'),

            ];

        if(request('link'))
        {
            $link=request('link');

        }
        // Optionally add 'featured' if found to the Data array
        if (request('featured'))
        {
            $featured = request('featured');
            $file_name = time() . $featured->getClientOriginalName();
            $featured->move('uploads/posts', $file_name);
            $data['featured'] = 'uploads/posts/'.$file_name;
        }

        // Optionally add 'file' if found to the Data array
        if (request('file')) {
            $file = request('file');
            $file_name = time() . $file->getClientOriginalName();
            $file->move('uploads/posts', $file_name);
            $data['file'] = 'uploads/posts/'.$file_name;

        }
        // Create the Post with the $data Array

       $post = Post::create($data);



        Session::flash('success', 'New Blog has been Published on Website for Particular Menu');

        return redirect()->back();

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function getDocument($id)
    {
        $data = Post::findOrFail($id);

        $file = $data->file_name;

        // file not found
        if( ! Storage::exists($file) ) {
            abort(404);
        }

        $pdfContent = Storage::get($file);

        // for pdf, it will be 'application/pdf'
        $type       = Storage::mimeType($file);
        $file_name   = Storage::name($file);

        return Response::make($pdfContent, 200, [
            'Content-Type'        => $type,
            'Content-Disposition' => 'inline; filename="'.$file_name.'"'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);

        if($post->count()==0 )
        {
            Session::flash('info', 'You must have to Create Menu before Creating blog ');
        }

        //positionClass:"toast-top-right

        elseif($post)
        {
            Session::flash('info', 'Please Be Sure Your menu should be same for UPDATING menu');
        }
        return view('admin.posts.edit')->with('post', $post)->with('levels', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'link'=>'required',
            'date_time'=>'required'
        ]);

        $post = Post::find($id);



        if($request->hasFile('featured'))
        {
            $featured = $request->featured;
            $featured_new_name = time() . $featured->getClientOriginalName();
            $featured->move('uploads/posts', $featured_new_name);
            $post->featured = 'uploads/posts/'.$featured_new_name;

        }

        if($request->hasFile('file'))
        {
            $file = $request->file;
            $file_new = time() . $file->getClientOriginalName();
            $file->move('uploads/posts', $file_new);
            $post->file = 'uploads/posts/'.$file_new;

        }
        $post->link=$request->link;
        $post->date_time=$request->date_time;
        $post->title=$request->title;
        $post->content=$request->content;


        $post->category_id=$request->category_id;

        $post->save();

        Session::flash('success', 'Post updated successfully.');

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post=Post::find($id);


        Post::where('id', $id)->delete();



        Session::flash('success', 'Blog has trashed for particular Menu');

        return redirect()->back();


    }



    public function trashed()
    {

        $post=Post::onlyTrashed()->get();


        return view('admin.posts.trashed')->with('posts', $post);

    }
    public function kills($id)

    {
        $post=Post::withTrashed()->where('id', '=', $id)->get()->first();

        $post->forceDelete();

        Session::flash('success', 'This Blog Has been Deleted Permanently');

        return redirect()->back();

    }


    public function restore($id)

    {

        $post=Post::withTrashed()->where('id','=',$id)->first();

        $post->restore();

        Session::flash('success','This Blog for particular has been restore in Blog');

        return redirect()->back();


    }



}




