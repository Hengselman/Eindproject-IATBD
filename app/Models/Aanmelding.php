<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aanmelding extends Model
{
    protected $table = 'aanmeldingen';
    protected $fillable = ['user_id', 'huisdier_id'];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function huisdier()
    {
        return $this->belongsTo(Huisdier::class);
    }
}
