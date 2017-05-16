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

/*Route::get('/', function () {
    return view('blog.index');
})->name('blog.index'); */
//Route::get('/','PostController@getIndex')->name('blog.index');
//alternate syntax for routing with array
//advantage is compact ways, structured syntax 
Route::get('/',[
    'uses'=>'PostController@getIndex',
    'as'=>'blog.index'
]);
/*
Route::get('post/{id}',function($id){
    if($id==1){
        $post=[
        'title'=>'Learning Laravel',
        'content'=>'this blog post will get you right on track'
        ];
    }else{
        $post=[
        'title'=>'something else',
            'content'=>'Some other content'
        ];
    }
    return view('blog.post',['post'=>$post]);
})->name('blog.post'); */
Route::get('post/{id}',[
'uses'=>'PostController@getIndex',
'as'=>'blog.post'
]);

Route::get('about',function(){
    return view('other.about');
}) ->name('other.about');


Route::group(['prefix'=>'admin'],function(){
    /*Route::get('',function(){
        return view('admin.index');
    }) ->name('admin.index'); */
    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index'
    ]);

    /*Route::get('create',function(){
        return view('admin.create');
    }) ->name('admin.create');*/
    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create'
    ]);
    
    //Dependency Injection
    /*Route::post('create',function(\Illuminate\Http\Request $request,\Illuminate\Validation\Factory $validator){
        /*return "it works";
        $validation=$validator->make($request->all(),[
            'title'=>'required|min:5',
            'content'=>'required|min:10'
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
         return redirect()->route('admin.index')
         ->with('info','Post created , Title :'.$request->input('title'));
    }) -> name('admin.create'); */
    Route::post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create'
    ]);
    
    /*Route::get('edit/{id}',function($id){
        /*if($id==1){
        $post=[
        'title'=>'Learning Laravel',
        'content'=>'this blog post will get you right on track'
        ];
    }else{
        $post=[
        'title'=>'something else',
            'content'=>'Some other content'
        ];
    }
        return view('admin.edit',['post'=>$post]);
    }) ->name('admin.edit'); */
    Route::get('edit/{id}', [
        'uses' => 'PostController@getAdminEdit',
        'as' => 'admin.edit'
    ]);
    
    /*Route::post('edit',function(\Illuminate\Http\Request $request,\Illuminate\Validation\Factory $validator){
        /*return "It works";
        $validation=$validator->make($request->all(),[
            'title'=>'required|min:5',
            'content'=>'required|min:10'
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        return redirect()->route('admin.index')
        ->with('info','Post edited , New Title :'.$request->input('title'));
    }) -> name('admin.update'); */
    Route::post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update'
    ]);
    
});





/* Route::get('/user/{name?}',function($name = 'Virat Gandhi',$age=25){
echo "Name: ".$name;
echo '<br>';
echo "Age : ".$age;
}); */