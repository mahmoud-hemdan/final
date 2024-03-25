<?php

namespace App\Http\Controllers;

use App\Http\Requests\Oreder_CustomerRequest;
use App\Model\Customers;
use App\Model\Order;
// use App\OrderCustomer;
use App\Model\OrderCustomer;
use Illuminate\Http\Request;

class Order_Customer_pivot extends Controller
{
    private $column = [

        'customer',
        'order',
    ];
    public function index(){
        $customer=Customers::with('order')->get();
        $order=Order::with('customer')->get();
        return view('order_customer.create',compact('customer',"order"));
    }

public function store(Oreder_CustomerRequest $request){

    OrderCustomer::create([
        'id'=>$request->id_ordercustomer,
        'customer_id'=>$request->customer,
        'order_id'=>$request->order,
    ]);
    
    
// $date = $request->only($this->column);
// OrderCustomer::create($date);
// return view('order_customer.create');
return redirect()->route("order_customer.create")->with("success","Created Successfully");
    
   
}

public function view(){

    $playertour = OrderCustomer::with('order','customer')->get();
//    dd($playertour);

    return view('order_customer.view', compact('playertour'));
 



// order_customer.view

}  
public function show($id){
 
    $playertour = OrderCustomer::findOrFail($id);   
 return view('order_customer.show',compact('playertour'));
}
public function delete($id){
 
    $playertour = OrderCustomer::findOrFail($id);   
$playertour->delete();
return redirect()->route('order_customer.view')->with('success','Delete Successfully');

}




}
