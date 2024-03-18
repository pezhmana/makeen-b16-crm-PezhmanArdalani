<?php

use App\Http\Requests\categoriesCreateRequest;
use App\Http\Requests\categoriesEditRequest;
use App\Http\Requests\maghaleCreateRequest;
use App\Http\Requests\maghaleEditRequest;
use App\Http\Requests\ordersCreateRequest;
use App\Http\Requests\ordersEditRequest;
use App\Http\Requests\productsCreateRequest;
use App\Http\Requests\productsEditRequest;
use App\Http\Requests\userCreateRequest;
use App\Http\Requests\userEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



//users get routes
Route::get('/users', function () {
   $users = DB::table('users')->get();
    return view('users.index' , ['users'=> $users]);
});

Route::get('/users/create', function () {
    return view('users.create');
});

Route::get('/users/edit/{id}', function ($id) {
    $user = DB::table('users')->where('id' , $id)->get()->first();
    return view('users.edit' , ['user'=>$user]);

});

//user post routes
Route::post('/users/create', function (userCreateRequest $request) {
    DB::table('users')->insert([
        'id'=>$request->id,
        'name'=>$request->name,
        'last_name'=>$request->last_name,
        'phone'=>$request->phone,
        'password'=>$request->password,
        'country'=>$request->country,
        'gender'=>$request->gender,
        'description'=>$request->description,
    ]);
    return redirect('/users');
});

route::post('/users/edit/{id}' , function (userEditRequest $request , $id){
    DB::table('users')->where('id' , $id)->update([
        'id'=>$request->id,
        'name'=>$request->name,
        'last_name'=>$request->last_name,
        'phone'=>$request->phone,
        'password'=>$request->password,
        'country'=>$request->country,
        'gender'=>$request->gender,
        'description'=>$request->description,
    ]);
    return redirect('/users');
});

Route::delete('users/delete/{id}', function ($id) {
    DB::table('users')->where('id',$id)->delete();
    return redirect('/users');

});







//products get routes

Route::get('/products', function () {
   $products = DB::table('products')->get();
    return view('products.index' , ['products'=> $products]);
});

Route::get('/products/create', function () {
   $categories = DB::table('categories')->get();
    return view('products.create' , ['categories'=>$categories]);
});

Route::get('/products/edit/{id}', function ($id) {
   $product =  DB::table('products')->where('id' , $id)->get()->first();
   $categories = DB::table('categories')->get();
    return view('products.edit' , ['product'=>$product] , ['categories'=>$categories]);
});




//products post routes
Route::post('/products/create', function (productsCreateRequest $request) {
    DB::table('products')->insert([
        "id"=>$request->id,
        "products_name"=>$request->products_name,
        "colour"=>$request->colour,
        "categories"=>$request->categories,
        "stock"=>$request->stock,
        "description"=>$request->description,

    ]);
    return redirect('/products');
});

Route::post('/products/edit/{id}', function (productsEditRequest $request , $id) {
    DB::table('products')->where('id',$id)->update([
        "id"=>$request->id,
        "products_name"=>$request->products_name,
        "colour"=>$request->colour,
        "categories"=>$request->categories,
        "stock"=>$request->stock,
        "description"=>$request->decription,
    ]);
    return redirect('/products');
});

Route::delete("/products/delete/{id}" , function ($id){
    DB::table('products')->where('id', $id)->delete();
    return redirect('products');

});




//orders get routes

Route::get('/orders', function () {
  $orders = DB::table('orders')->get();
    return view('orders.index' , ['orders'=>$orders]);
});

Route::get('/orders/create', function () {
    return view('orders.create');
});

Route::get('/orders/edit/{id}', function ($id) {
    $order = DB::table('orders')->where('id' , $id)->get()->first();
        return view('orders.edit' , ['order'=>$order]);
});

//orders post routes
Route::post('/orders/create', function (ordersCreateRequest $request) {
    DB::table('orders')->insert([
        'id'=>$request->id,
        'name'=>$request->name,
        'last_name'=>$request->last_name,
        'phone'=>$request->phone,
        'order_name'=>$request->order_name,
        'number'=>$request->number,
        'order_number'=>$request->order_number,
        'price'=>$request->price,
        'description'=>$request->description,
    ]);
    return redirect('/orders');
});

Route::post('/orders/edit/{id}', function ($id , ordersEditRequest $request) {
    DB::table('orders')->where('id',$id)->update([
        'id'=>$request->id,
        'name'=>$request->name,
        'last_name'=>$request->last_name,
        'phone'=>$request->phone,
        'order_name'=>$request->order_name,
        'number'=>$request->number,
        'order_number'=>$request->order_number,
        'price'=>$request->price,
        'description'=>$request->description,
    ]);
    return redirect('/orders' );
});

Route::delete('/orders/delete/{id}', function ($id) {
    DB::table('orders')->where('id', $id)->delete();
    return redirect('/orders');
});


//maghale get routes

Route::get('/maghale', function () {
    $maghale = DB::table('posts')->get();
    return view('maghale.index' , ['maghale'=>$maghale]);
});

Route::get('/maghale/create', function () {
    $categories = DB::table('categories')->get();
    return view('maghale.create' , ['categories'=>$categories]);
});

Route::get('/maghale/edit/{id}', function ($id) {
    $maghale = DB::table('posts')->where('id',$id)->get()->first();
    $categories = DB::table('categories')->get();
    return view('maghale.edit' , ['maghale'=>$maghale] , ['categories'=>$categories]);

});

//maghale post routes
Route::post('/maghale/create', function (maghaleCreateRequest $request) {
    DB::table('posts')->insert([
       'id'=>$request->id,
       'categories'=>$request->categories,
       'title'=>$request->title,
       'writer'=>$request->writer,
       'date'=>$request->date,
       'source'=>$request->source,
       'catID'=>$request->catID
    ]);
    return redirect('/maghale');
});

Route::post('/maghale/edit/{id}', function (maghaleEditRequest $request ,$id) {
    DB::table('posts')->where('id',$id)->update([
        'categories'=>$request->categories,
       'title'=>$request->title,
       'writer'=>$request->writer,
       'date'=>$request->date,
       'source'=>$request->source,
    ]);
    return redirect('/maghale');
});

Route::delete('/maghale/delete/{id}', function ($id) {
    DB::table('posts')->where('id',$id)->delete();
    return redirect('/maghale');
});






//categories get routes

Route::get('/categories', function () {
    $categories = DB::table('categories')->get();
    return view('categories.index' , ['categories'=>$categories]);
});

Route::get('/categories/create', function () {
    return view('categories.create');
});

Route::get('/categories/edit/{id}', function ($id) {
    $categories = DB::table('categories')->where('id',$id)->get()->first();
    return view('categories.edit' , ['categories'=>$categories]);
});

//categories post routes

Route::post('/categories/create', function (categoriesCreateRequest $request) {
    DB::table('categories')->insert([
        'category_name'=>$request->category_name,
        'supgroup'=>$request->supgroup,
        'supgroup_name'=>$request->supgroup_name,
    ]);
    return redirect('/categories');
});

Route::post('/categories/edit/{id}', function ($id , categoriesEditRequest $request) {
    DB::table('categories')->where('id', $id)->update([
        'category_name'=>$request->category_name,
        'supgroup'=>$request->supgroup,
        'supgroup_name'=>$request->supgroup_name
    ]);
    return redirect('/categories');
});

Route::delete('/categories/delete/{id}', function ($id) {
DB::table('categories')->where('id', $id)->delete();
    return redirect('/categories');
});





//sign

route::get('/sign/in' , function (){
    return view("sign.in");
});

route::get('/sign/up' , function (){
    return view("sign.up");
});

