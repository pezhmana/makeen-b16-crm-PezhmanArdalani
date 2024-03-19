<?php

namespace App\Http\Controllers;

use App\Http\Requests\ordersCreateRequest;
use App\Http\Requests\ordersEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ordersController extends Controller
{
    public function index(){
    $orders = DB::table('orders')->get();
    return view('orders.index' , ['orders'=>$orders]);
    }

    public function createGet(){
    return view('orders.create');
    }

    public function editGet($id){
    $order = DB::table('orders')->where('id' , $id)->get()->first();
    return view('orders.edit' , ['order'=>$order]);
    }

    public function createPost(ordersCreateRequest $request){
        DB::table('orders')->insert([$request->except('_token')]);
        return redirect(route('orders.index'));

    }

    public function editPost($id , ordersEditRequest $request){
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
        return redirect(route('orders.index'));
    }

    public function delete($id){
        DB::table('orders')->where('id', $id)->delete();
        return redirect(route('orders.index'));
    }






}
