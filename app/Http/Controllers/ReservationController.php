<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Model\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
   public function store(ReservationRequest $request){
Reservation::create([
"reservations_date"=>$request->reservations_date,
"reservations_time"=>$request->reservations_time,
"reservations_degree"=>$request->reservations_degree,
"reservations_name"=>$request->reservations_name,
"email"=>$request->email,
"phone"=>$request->phone,
]);
return redirect()->route("reservation")->with('success','Created Successfully');
   }

   public function index(){
$reservation=Reservation::all();
      return view('Reservations.view',['reservation'=>$reservation]);  
    }
    public function show($id){
$reservation=Reservation::findOrFail($id);
return view('Reservations.show',['reservation'=>$reservation]);

    }

   public function delete($id){
      $reservation=Reservation::findOrFail($id);
      $reservation->delete();  
return redirect()->route('Reservations.view')->with('success','Delete Successfully');
   } 
}
