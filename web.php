<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::Post('/subscribe', function(){

$email=request('email');

Newsletter::subscribe($email);

return redirect()->back();

Session::flash('subscribed', 'Successfully subscribed');

});

Route::get('/category/home', [

 'uses'=>'FrontendController@welcome',

    'as'=>'welcome'

]);

Route::get('/', [

    'uses'=>'FrontendController@welcome',

    'as'=>'welcome'

]);

Route::get('post/{slug}',[

    'uses'=>'FrontendController@singlePost',
    'as'=>'post.single'
]);



Route::get('/category/events/{slug}', 'EventController@index');


Route::get('/category/{id}',[

    'uses'=>'FrontendController@category',

    'as'=>'category.single'
]);



Auth::routes();

Route::group(['prefix'=> 'admin', 'middleware'=>'auth'],function() {

    Route::get('/home', [

        'uses' => 'HomeController@index',

        'as' =>'home'
    ]);


    route::get('/admin', function (){


    return view('admin.index');

    });


    Route::get('category/create',[


            'uses'=>'CategoriesController@create',

            'as'=>'category.create'

        ]);


    Route::post('category/store',[

        'uses'=>'CategoriesController@store',

        'as'=>'category.store'
    ] );


     Route::get('categories',

        [
         'uses'=>'CategoriesController@index',

         'as'=>'categories'

    ]);

    route::get('/category/edit/{id}',

        [
        'uses'=>'CategoriesController@edit',

        'as'=>'category.edit'
    ]);


    route::get('/category/delete/{id}',[

        'uses'=>"CategoriesController@destroy",
        'as'=>'category.delete'
    ]);

    route::Post('/category/update/{id}',[

        'uses'=>"CategoriesController@update",
        'as'=>'category.update'
    ]);


    Route::get('/post/create',

        [            'uses' => 'PostController@create',

            'as' => 'post.create'

        ]);

    Route::post('/post/store',

        [
            'uses' => 'PostController@store',

            'as' => 'post.store'
        ]);

    route::get('/posts',[

       'uses'=>"PostController@index",
        'as'=>'posts'

    ]);



    Route::get('/show/{id}', 'PostController@getDocument');



    route::get('/post/edit/{id}',[


        'uses'=>"PostController@edit",
        'as'=>'post.edit'
    ]);

    route::get('/post/delete/{id}',[


        'uses'=>"PostController@destroy",
        'as'=>'post.delete'
    ]);

    route::get('/post/trash',[

        'uses'=>"PostController@trashed",
        'as'=>'post.trash',
    ]);

    route::get('/post/kills/{id}',[

        'uses'=>"PostController@kills",

        'as'=>'post.kills'
    ]);

    Route::post('/post/update/{id}',[

        'uses'=>'PostController@update',
        'as'=>'post.update'

    ] );


    route::get('/post/restore/{id}',[

       'uses'=>"PostController@restore",
       'as'=>'post.restore'
    ]);

    route::get('/settings/',[

       'uses'=>"SettingController@index",
        'as'=>'settings'

    ]);

    route::post('/setting/update',[

        'uses'=>"SettingController@update",
       'as'=>'setting.update',

    ]);


    /*******************************************
     * Route for SubCategory
     ****************************************/


    route::get('/Subcategory/',[

        'uses'=>"SubCategorycontroller@create",
        'as'=>'Subcategories.create',

    ]);

    route::post('/Subcategory/store',[

        'uses'=>"SubCategorycontroller@store",
        'as'=>'Subcategories.store',

    ]);

    route::get('/subcategory/edit/{id}',

        [
            'uses'=>"SubCategorycontroller@edit",

            'as'=>'Subcategories.edit',
        ]);

    route::post('/subcategory/update/{id}',

        [
            'uses'=>"SubCategorycontroller@update",

            'as'=>'Subcategories.update',
        ]);


    route::get('/subcategory/delete/{id}',[

        'uses'=>"SubCategorycontroller@destroy",
        'as'=>'Subcategories.delete',
    ]);

    route::get('/subcategory/index/',[

        'uses'=>"SubCategorycontroller@index",
        'as'=>'Subcategories',
    ]);






});