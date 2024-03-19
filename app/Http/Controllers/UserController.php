<?php

namespace App\Http\Controllers;

use App\Http\Requests\userCreateRequest;
use App\Http\Requests\userEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function createGet(){
        return view('users.create');
    }

    public function editGet($id){
         $user = DB::table('users')->where('id' , $id)->get()->first();
        return view('users.edit' , ['user'=>$user]);
    }

    public function createPost(userCreateRequest $request){
        DB::table('users')->insert([$request->except('_token')]);
        return redirect(route('users.index'));
    }

    public function editPost(userEditRequest $request , $id){
        DB::table('users')->where('id' , $id)->update([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'country'=>$request->country,
            'gender'=>$request->gender,
            'password'=>$request->password,
            'description'=>$request->description,

    ]);
    return redirect(route('users.index'));

    }

    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect(route('users.index'));

    }
    public function index(){
        $users = DB::table('users')->get();
        return view('users.index' , ['users'=> $users]);

    }
}
