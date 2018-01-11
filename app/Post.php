<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;
    protected $table = "posts";
    protected $fillable = ['title','content','category_id','user_id'];
    public function sluggable()
    {

        return [
            'slug' => [
                'source' => 'title'

            ]

        ];
    }

    public function category()
    {
        return $this->belongsTo('App\category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function scopeSearch($query,$title)
    {
        return $query->where('title','LIKE','%' . $title . '%');
    }


}
