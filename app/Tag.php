<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name', 'slug'
   ];

   public function posts(){

       return $this->morphByMany(Post::class, 'taggable');
   }

   public function videos(){

    return $this->morphByMany(Video::class, 'taggable');
   }
}
