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

use App\Post; //  to use database

Route::get('/', function () {
    return view('welcome');
});


/*
 * Eloquent
 */
//Retrieve info from data

Route::get("/getall",function(){
    $posts = Post::all();

    foreach($posts as $post){
        return $post->title;
    }
});

Route::get('findone/{id}', function($id){
   $posts = Post::find($id);
   return $posts->title." => ". $posts->description;
});

//Retrive with condition

Route::get('/findwhere', function(){
   $posts = Post::where('id',51)->get();
    return $posts;

});
Route::get('/find-chain/{isAdmin}',function($isAdmin){
   $posts = Post::where('is_admin',$isAdmin)->orderBy('title','asc')->take(10)->get();
   return $posts;
});

Route::get('/find-or-fail/{id}',function($id){

    return Post::findOrFail($id);
});

// find or fail with custom column

Route::get('/f-o-f/{query}',function($query){
   $post = Post::where('title','like','%'. $query.'%')->get();
   return $post;
});

// Count
Route::get('/counts',function(){
    $c = Post::all();
    return $c->count();
});

// Count
Route::get('/2counts/{desc}',function($desc){
    $c = Post::where('id','>',50)->
    where('description' ,'like', '%'.$desc .'%')->get();
    $result = array(
        'count' => $c->count(),
        'res' =>$c
    );
    return $result;

});

//Insert Data
Route::get('/insertDummy',function(){

    $post=new Post();
    $post->title='Dummy Title';
    $post->description='Dummy Content';
    $post->save();
    return "save";

});

//Update  Data
Route::get('/update',function(){

    $post=Post::find(101);
    $post->title='Dummy Title 101';
    $post->description='Dummy Content 101';
    $post->save();
    return "save";

});

//Update  Data
Route::get('/update2',function(){

    if(!Post::where('id','2')->
        where('is_admin','1')->update(['title' => 'This is updated version'])){
        // send false if query unsuccessful
        return "false";
    }

    return "Update";

});

//delete
Route::get('/del',function(){

    $postDel=Post::find(1);
    $postDel->delete();
    return "Deleted";
});


Route::get('/del-mass',function(){

   Post::destroy([2,4,6,8,10,20]);

    return "Deleted";
});

//Mass assignment

Route::get('/mass-assign',function(){
    //to run this query properly need to add fields to fillable array
   Post::create(['title'=>'test title','description'=>'test desc']);

   return 'saved';
});
/*
 * SOFT DELETE
 */

Route::get('/soft-delete', function(){
$items = Post::where('is_admin', '1');
$items->delete(); //updates is_deleted
return '1';
});

//get all items with deleted items
Route::get('/all-items',function(){
  // $deldata = Post::find(1) ;
$r = Post::withTrashed()->get();
return $r;
});

//get deleted items
Route::get('/deleted-items',function(){
    $r = Post::onlyTrashed()->get();
    return $r;
});

//get non deleted items , normal get()


//Restore Deleted
Route::get('/restore-deleted-items',function(){
    Post::onlyTrashed()->restore();
    return 'restored';
});

//Delete softdeleted perma.
Route::get('/delete-soft-deleted-items',function(){
    Post::onlyTrashed()->forceDelete();
    return 'Deleted';
});