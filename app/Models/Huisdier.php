<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huisdier extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function aanmeldingen()
    {
        return $this->hasMany(Aanmelding::class);
    }
    
    protected $table = "huisdier";

    public $timestamps = false;
    
}
