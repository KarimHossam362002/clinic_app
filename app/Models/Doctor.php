<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable =[
        'name','city','email','password','image','major_id'
    ];
    function major(){
        return $this->belongsTo(Major::class);
    }
    function bookings(){
        return $this->hasMany(Booking::class);
    }
    function rates(){
        return $this->hasMany(Rate::class);
    }
}
