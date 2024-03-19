<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoriesCreateRequest;
use App\Http\Requests\categoriesEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoriesController extends Controller
{
    public function index(){
        $categories = DB::table('categories')->get();
        return view('categories.index' , ['categories'=>$categories]);

    }

    public function createGet(){
        return view('categories.create');
    }

    public function editGet($id){
        $categories = DB::table('categories')->where('id',$id)->get()->first();
    return view('categories.edit' , ['categories'=>$categories]);
    }

    public function createPost(categoriesCreateRequest $request){
        DB::table('categories')->insert([$request->except('_token')
        ]);
        return redirect(route('categories.index'));
    }

    public function editPost(categoriesEditRequest $request , $id){
        DB::table('categories')->where('id', $id)->update([
            'category_name'=>$request->category_name,
            'supgroup'=>$request->supgroup,
            'supgroup_name'=>$request->supgroup_name
        ]);
        return redirect(route('categories.index'));

    }

    public function delete($id){
        DB::table('categories')->where('id', $id)->delete();
        return redirect(route('categories.index'));
    }
}
