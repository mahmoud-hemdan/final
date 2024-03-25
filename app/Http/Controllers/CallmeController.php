<?php

namespace App\Http\Controllers;

use App\Http\Requests\CallmeRequest;
use App\Model\Callme;
use Illuminate\Http\Request;

class CallmeController extends Controller
{
    public function edit(CallmeRequest $request){
Callme::create([
"callme_name"=>$request->callme_name,
"callme_email"=>$request->callme_email,
"callme_message"=>$request->callme_message,
]);
return redirect()->route('contact')->with('success','Created Successfully');
    }

    public function index(){
        $Contact=Callme::all();
        return view('Contact.view',['Contact'=>$Contact]);
    }
   public function show($id){
    $Contact=Callme::findOrFail($id);

    return view('Contact.show',['Contact'=>$Contact]);
   }

   public function delete($id){
    $Contact=Callme::findOrFail($id);
    $Contact->delete();
    return redirect()->route('Contact.view')->with('success','Delete Successfully');
   }
}
