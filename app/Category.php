<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['name','image'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public  function scopeSearchCategory($query,$name)
    {
        return $query->where('name','=',$name);
    }

}
