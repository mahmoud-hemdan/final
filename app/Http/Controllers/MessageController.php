<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Model\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function update(MessageRequest $request){
Message::create([
"name"=>$request->name,
"email"=>$request->email,
"message"=>$request->message,
]);
return redirect()->route('blogdetails')->with('success','Created Successfully');
    }

    public function index(){
     $massage=Message::all(); 

     return view('comments.view',['massage'=>$massage]);
    }

    public function show($id){
        $massage=Message::findOrFail($id);
return view('comments.show',['massage'=>$massage]);
    }
    public function delete($id){
$massage=Message::findOrFail($id);
$massage->delete();
return redirect()->route('comments.view')->with('success','Delete Successfully');
    }
}
