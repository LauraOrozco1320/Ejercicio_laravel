<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    //Relacion Uno a Muchos con tabla Trucker
    public function truckers(){
        return $this->belongsTo('App\Models\trucker');
        }

}
