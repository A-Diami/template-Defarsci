<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','description'
    ];

    public function images(){
        return $this->hasMany('App\Models\Image');
    }
}


