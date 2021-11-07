<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory;
    protected $fillable = ['inst_name', 'inst_url', 'inst_class', 'inst_play', 'description'];

    public function classification(){
        return $this->belongsTo(Classification::class, 'inst_class', 'class_code');
    }
}
