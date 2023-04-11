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
    
    protected $table = "huisdier";

    public $timestamps = false;
    
}
