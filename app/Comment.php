<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body'
   ];
    public function commentable(){

        return $this->morphTo()->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
