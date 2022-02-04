<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ward extends Model
{
    use HasFactory;

    public function citizen(){
        return $this->hasMany(citizen::class);
    }

    public function lga(){
        return $this->belongsTo(lga::class);
    }
}
