<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Http\Requests\CustomerUpdate;
use App\Model\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
   public function index(){
$customer=Customers::all();
return view('customer',['customer'=>$customer]);

   }
   public function show($id){
      $customer=Customers::findOrFail($id);
      return view('customer.show',['customer'=>$customer]);
   }
   public function delete($id){
$customer=Customers::findOrFail($id);
$customer->delete();
return redirect()->route('customers')->with('success','Delete Successfully');
   }
   public function create(){
 $customer=Customers::all();     
return view('customer.create',['customer'=>$customer]);
   }
 public function savenew(CustomerRequest $request){
Customers::create([
"id"=>$request->id,
"customer_name"=>$request->customer_name,
"email"=>$request->email,
"phone"=>$request->phone,
"city"=>$request->city,
]);
return redirect()->route('customers')->with("success","Created Successfully");
 }

 public function edit($id){
   $customer=Customers::findOrFail($id);     
   return view('customer.edit',['customer'=>$customer]);
 }

 public function store(CustomerUpdate $request){
   $old_id=$request->old_id;
$update=Customers::findOrFail($old_id);

$update->update([
"id"=>$request->id ||$update->id,
"customer_name"=>$request->customer_name,
"email"=>$request->email,
"phone"=>$request->phone,
"city"=>$request->city,
]);
return redirect()->route('customers')->with("success","Updated Successfully");
 }
}
