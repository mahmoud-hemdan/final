<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
   protected $fillable=[
    "id","customer_name","email","phone","city"
   ];

 

   public function order()
   {
       return $this->belongsToMany(Order::class ,'order_customer_pivot',"id" ,"customer_id","order_id");
   }
}
