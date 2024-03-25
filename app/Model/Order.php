<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $fillable=[
'order_name','order_description','order_address'
   ];

   public function customer()
   {
       return $this->belongsToMany(Customers::class,'order_customer_pivot',"id","customer_id","order_id");
   }
}
