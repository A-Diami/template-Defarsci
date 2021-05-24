<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    //use Sluggable;
    
    protected $fillable = [
        'title','slug','description','image','user_id'
    ];

    protected static function boot(){
        parent::boot();

        static::created(function($model){
            $model->update([
                'slug' => Str::slug("p{$model->id}-{$model->title}")
            ]);

        });
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
    
}
