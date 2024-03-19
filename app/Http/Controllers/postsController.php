<?php

namespace App\Http\Controllers;

use App\Http\Requests\maghaleCreateRequest;
use App\Http\Requests\maghaleEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postsController extends Controller
{
    public function index(){
        $maghale = DB::table('posts')->get();
        return view('maghale.index' , ['maghale'=>$maghale]);

    }

    public function createGet(){
        $categories = DB::table('categories')->get();
        return view('maghale.create' , ['categories'=>$categories]);

    }

    public function editGet($id){
        $maghale = DB::table('posts')->where('id',$id)->get()->first();
        $categories = DB::table('categories')->get();
        return view('maghale.edit' , ['maghale'=>$maghale] , ['categories'=>$categories]);

    }

    public function createPost(maghaleCreateRequest $request){
        DB::table('posts')->insert([$request->except('_token')
         ]);
         return redirect(route('maghale.index'));

    }

    public function editPost($id , maghaleEditRequest $request){
        DB::table('posts')->where('id',$id)->update([
            'categories'=>$request->categories,
           'title'=>$request->title,
           'writer'=>$request->writer,
           'date'=>$request->date,
           'source'=>$request->source,
        ]);
        return redirect(route('maghale.index'));

    }

    public function delete($id){
        DB::table('posts')->where('id',$id)->delete();
        return redirect(route('maghale.index'));

    }
}
