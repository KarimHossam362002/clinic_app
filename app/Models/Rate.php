<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $fillable = ['rate','doctor_id'];
    function doctor(){
        return $this->belongsToMany(Doctor::class);
    }
}
