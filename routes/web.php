<?php

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

// Route::get('/greeting/{name}/{last_name?}', function ($name , $last_name = null) {
//     return "Hello  $name  $last_name ";
// });

// Route::get('/greeting', function () {
//     DB::table('users')->insert([
//     'email' => 'kayla@example.com',
//     'votes' => 0
// ]);
//     return "Hello";
// });


//users
Route::get('/users', function () {
    return view('users.index');
});

Route::get('/users/create', function () {
    return view('users.create');
});

Route::get('/users/edit', function () {
    return view('users.edit');
});

//products

Route::get('/products', function () {
    return view('products.index');
});

Route::get('/products/create', function () {
    return view('products.create');
});

Route::get('/products/edit', function () {
    return view('products.edit');
});

//orders

Route::get('/orders', function () {
    return view('orders.index');
});

Route::get('/orders/create', function () {
    return view('orders.create');
});

Route::get('/orders/edit', function () {
    return view('orders.edit');
});

//maghale

Route::get('/maghale', function () {
    return view('maghale.index');
});

Route::get('/maghale/create', function () {
    return view('maghale.create');
});

Route::get('/maghale/edit', function () {
    return view('maghale.edit');
});

//categories

Route::get('/categories', function () {
    return view('categories.index');
});

Route::get('/categories/create', function () {
    return view('categories.create');
});

Route::get('/categories/edit', function () {
    return view('categories.edit');
});



