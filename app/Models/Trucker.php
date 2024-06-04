<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trucker extends Model
{
    use HasFactory;
    //Relacion Uno a Muchos con tabla Package
    public function packages(){
        return $this->hasMany('App\Models\package');
    }
    //relacion muchos a muchos 
    public function trucks(){
        return $this->belongsToMany('App\Models\Truck');
    }
}
