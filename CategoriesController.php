<?php

namespace App\Http\Controllers;

use App\Category;

use App\Str;

use Illuminate\Http\Request;
use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        // $categories = Category::with('children')->whereNull('parent_id')->get(); // now you will get all categories with null parent ID"s and their children

        // $categories = Category::where('parent_id', '=', 0)->get();

        $levels = Category::where(['parent_id'=>0])->get(); // Get Root Level (No Parents)
        return view ('admin.categories.index')->with(compact('levels'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.categories.create')->with('levels', Category::all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $this->validate($request, [

            'name' =>'required',
            'parent_id' => 'required|numeric', //This will check the parent availability how about top level ? where id is 0?

        ]);

        Category::create([

            'name'=>$request->name,
            'parent_id'=>$request->parent_id

        ]);

        Session::flash('success', 'Category has created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // ????
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= Category::find($id);

        $categoryDetails=Category::where(['id'=>$id])->first();

        $levels = Category::where(['parent_id'=>0])->get(); // Get Root Level (No PArents)

        return view('admin.categories.edit')->with('category', $category)->with(compact('categoryDetails','levels'));
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
        $category=Category::find($id);

        $category->name=$request->name;

        $category->save();

        Session::flash('success', 'Category updated successfully');

        return redirect()->route('categories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);

        $category->delete();

        //Category::where('id', $id)->delete();

        Session::flash('success', 'Category has successfully deleted');

        return redirect()->route('categories');

    }
}
