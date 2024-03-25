<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderCustomer extends Model
{
    protected $fillable =
    ["id","customer_id","order_id"];


    protected $table='order_customer_pivot';

    public function order()
    {
        return $this->hasMany(Order::class,  'id', 'order_id');
    }

    public function customer()
    {
        return $this->hasMany(Customers::class,  'id', 'customer_id');
    }
}
