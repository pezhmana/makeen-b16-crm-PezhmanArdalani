<?php

use App\Http\Controllers\categoriesController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\UserController;
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
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('/users', [UserController::class, 'index'])->name('users.index') ;

Route::get('/users/create',[UserController::class , 'createGet'])->name('users.createGet') ;

Route::get('/users/edit/{id}', [UserController::class , 'editGet'])->name('users.editGet') ;

//user post routes
Route::post('/users/create', [UserController::class, 'createPost'])->name('users.createPost') ;

route::post('/users/edit/{id}' ,[UserController::class,'editPost'])->name('users.editPost') ;

Route::delete('users/delete/{id}',[UserController::class,'delete'])->name('users.delete') ;







//products get routes

Route::get('/products',[productsController::class, 'index'])->name('products.index');

Route::get('/products/create',[productsController::class, 'createGet'])->name('products.createGet');

Route::get('/products/edit/{id}', [productsController::class, 'editGet'])->name('products.editGet');

//products post routes
Route::post('/products/create',[productsController::class, 'createPost'])->name('products.createPost');

Route::post('/products/edit/{id}',[productsController::class, 'editPost'])->name('products.editPost');

Route::delete("/products/delete/{id}" ,[productsController::class, 'delete'])->name('products.delete');




//orders get routes

Route::get('/orders',[ordersController::class , "index"])->name('orders.index');

Route::get('/orders/create',[ordersController::class , "createGet"])->name('orders.createGet');

Route::get('/orders/edit/{id}', [ordersController::class , "editGet"])->name('orders.editGet');

//orders post routes
Route::post('/orders/create', [ordersController::class , "createPost"])->name('orders.createPost');

Route::post('/orders/edit/{id}', [ordersController::class , "editPost"] )->name('orders.editPost');

Route::delete('/orders/delete/{id}', [ordersController::class , "delete"] )->name('orders.delete');


//maghale get routes

Route::get('/maghale', [postsController::class,'index'])->name('maghale.index');

Route::get('/maghale/create', [postsController::class,'createGet'])->name('maghale.createGet');

Route::get('/maghale/edit/{id}', [postsController::class,'editGet'])->name('maghale.editGet');

//maghale post routes
Route::post('/maghale/create', [postsController::class,'createPost'])->name('maghale.createPost');

Route::post('/maghale/edit/{id}', [postsController::class,'editPost'])->name('maghale.editPost');

Route::delete('/maghale/delete/{id}',[postsController::class,'delete'])->name('maghale.delete');






//categories get routes

Route::get('/categories', [categoriesController::class ,"index"])->name('categories.index');

Route::get('/categories/create', [categoriesController::class ,"createGet"])->name('categories.createGet');

Route::get('/categories/edit/{id}',[categoriesController::class ,"editGet"])->name('categories.editGet');

//categories post routes

Route::post('/categories/create',[categoriesController::class ,"createPost"])->name('categories.createPost');

Route::post('/categories/edit/{id}',[categoriesController::class ,"editPost"])->name('categories.editPost');

Route::delete('/categories/delete/{id}',[categoriesController::class ,"delete"])->name('categories.delete');





//sign

route::get('/sign/in' , function (){
    return view("sign.in");
});

route::get('/sign/up' , function (){
    return view("sign.up");
});

