<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    protected $fillable = ['class_code', 'class_name', 'description'];
    protected $primaryKey = 'class_code';
    protected $keyType = 'string';
    
    public function instruments()
    {
        return $this->hasMany(Instrument::class, 'inst_class', 'class_code');
    }
}
