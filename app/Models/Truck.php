<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;
    // relacion muchos a muchos
    public function truckers(){
        return $this->belongsToMany('App\Models\Trucker');
    }
}
