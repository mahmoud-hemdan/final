<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=[
        
        'id','reservations_date','reservations_time','reservations_degree','reservations_name','email','phone'
        
        ];
}
