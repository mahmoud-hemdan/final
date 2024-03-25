<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductcreateRequest;
use App\Http\Requests\ProductUpdate;
use App\Model\Produst;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProdustController extends Controller
{
  public function index(){
    $produst=Produst::all();
    return view("product",['produst'=>$produst]);
  }
  public function show($id){
   
    $produst=Produst::findOrFail($id);
   
return view("produst.showprodust",['produst'=>$produst]);
  }
  public function delete($id){
    
    $produst=Produst::findOrFail($id);
    if(File::exists(public_path('product/image/'.$produst->produsts_image))){
      File::delete(public_path('product/image/'.$produst->produsts_image));
      }
$produst->delete();
return redirect()->route('products')->with('success','Delete Successfully');
  }
  public function create(){
    $produst=Produst::all();
    return view('produst.create',['produst'=>$produst]);
  }
  public function store(ProductcreateRequest $request){
    $imageName="";
    if($request->hasFile('produsts_image')){
$image=$request->produsts_image;
$imageName=time().rand(1,1000). '.' .$image->extension();
$image->move(public_path("product/image/"),$imageName);

    }  
Produst::create([
"id"=>$request->id,
"produsts_image"=>$imageName,
"produsts_name"=>$request->produsts_name,
"produsts_description"=>$request->produsts_description,
"produsts_prise"=>$request->produsts_prise,
"produsts_quantity"=>$request->produsts_quantity,
]);
return redirect()->route('products')->with('success','Create Successfully');
  }
  public function edit($id){
    $produst=Produst::findOrFail($id);
    return view('produst.edit',['produst'=>$produst]);
  }
  public function update(Request $request){
    $old_id=$request->old_id;
    $update=Produst::findOrFail($old_id);
    $imageName="";
    if($request->hasFile('produsts_image')){
$image=$request->produsts_image;
$imageName=time().rand(1,1000). '.' .$image->extension();
$image->move(public_path("product/image/"),$imageName);
    }else{
       $image=$update->produsts_image;
       $imageName=$image;
    }
    $update->update([
    "id"=>$request->id,
    "produsts_image"=>$imageName,
    "produsts_name"=>$request->produsts_name,
    "produsts_description"=>$request->produsts_description,
    "produsts_prise"=>$request->produsts_prise,
    "produsts_quantity"=>$request->produsts_quantity,
    ]);
    return redirect()->route('products')->with("success","Updated Successfully");
     }
  
}
