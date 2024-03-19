<?php

namespace App\Http\Controllers;

use App\Http\Requests\productsCreateRequest;
use App\Http\Requests\productsEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productsController extends Controller
{
    public function createGet(){
        $categories= DB::table('categories')->get();
        return view('products.create' ,['categories'=>$categories]) ;
    }

    public function editGet($id){
         $categories= DB::table('categories')->get();
         $product = DB::table('products')->where('id' , $id)->get()->first();
        return view('products.edit' , ['product'=>$product] , ['categories'=>$categories]);
    }

    public function createPost(productsCreateRequest $request){
        DB::table('products')->insert([$request->except('_token')]);
        return redirect('/products');
    }

    public function editPost(productsEditRequest $request , $id){
        DB::table('products')->where('id' , $id)->update([
        'products_name'=>$request->products_name,
        'colour'=>$request->colour,
        'categories'=>$request->categories,
        'stock'=>$request->stock,
        'description'=>$request->description,
    ]);
    return redirect(route('products.index'));

    }

    public function delete($id){
        DB::table('products')->where('id',$id)->delete();
        return redirect('/products');

    }
    public function index(){
        $products = DB::table('products')->get();
        return view('products.index' , ['products'=> $products]);

    }
}


