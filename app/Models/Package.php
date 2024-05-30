<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    //Relacion Uno a Muchos con tabla Truck_driver
    public function truck_drivers(){
        return $this->belongsTo('App\Models\truck_diver');
        }

}
