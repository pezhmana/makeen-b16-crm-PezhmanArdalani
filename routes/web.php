<?php

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
Route::post('/users/create', function (Request $request) {
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

route::post('/users/edit/{id}' , function (Request $request , $id){
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

    return view('products.create');
});

Route::get('/products/edit/{id}', function ($id) {
   $product =  DB::table('products')->where('id' , $id)->get()->first();

    return view('products.edit' , ['product'=>$product]);
});




//products post routes
Route::post('/products/create', function (Request $request) {
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

Route::post('/products/edit/{id}', function (Request $request , $id) {
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




//orders

Route::get('/orders', function () {
    return view('orders.index');
});

Route::get('/orders/create', function () {
    return view('orders.create');
});

Route::get('/orders/edit/{id}', function ($id) {
    return view('orders.edit');
});

//maghale

Route::get('/maghale', function () {
    return view('maghale.index');
});

Route::get('/maghale/create', function () {
    return view('maghale.create');
});

Route::get('/maghale/edit/{id}', function ($id) {
    return view('maghale.edit');
});

//categories

Route::get('/categories', function () {
    return view('categories.index');
});

Route::get('/categories/create', function () {
    return view('categories.create');
});

Route::get('/categories/edit/{id}', function ($id) {
    return view('categories.edit');
});

//sign

route::get('/sign/in' , function (){
    return view("sign.in");
});

route::get('/sign/up' , function (){
    return view("sign.up");
});

