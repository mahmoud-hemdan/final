<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Callme extends Model
{
    protected $fillable=[
    
        "id","callme_name","callme_email","callme_message"
         ];
}
