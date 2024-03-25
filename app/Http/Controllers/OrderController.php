<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrederUpdateRequest;
use App\Model\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
$order=Order::all();
      return view("order",['order'=>$order]); 
    }
    public function show($id){
$order=Order::findOrFail($id);
return view('order.show',['order'=>$order]);
    }

public function delete($id){
    $order=Order::findOrFail($id);
    $order->delete();
    return redirect()->route('order')->with('success','Delete Successfully');
}  

public function edit($id){
$order=Order::findOrFail($id);
return view('order.edit',['order'=>$order]);
}
public function update(OrederUpdateRequest $request ){
    $old_id=$request->old_id;
    $update=Order::findOrFail($old_id);
    
    $update->update([
    "id"=>$request->id ||$update->id,
    "order_name"=>$request->order_name,
    "order_description"=>$request->order_description,
    "order_address"=>$request->order_address,
    ]);
    return redirect()->route('order')->with("success","Updated Successfully");
}
public function create(){
    $order=Order::all();
    return view('order.create',['order'=>$order]);
}

public function store(OrederUpdateRequest $request){
    Order::create([
        "id"=>$request->id,
        "order_name"=>$request->order_name,
        "order_description"=>$request->order_description,
        "order_address"=>$request->order_address,
    ]);
    return redirect()->route('order')->with("success","Created Successfully");
}
}
