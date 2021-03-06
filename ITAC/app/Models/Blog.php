<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table='blogs';
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function images()
    {
        return $this->hasMany('App\Models\BlogImage');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
