<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function imageable()
    {
        protected $fillable = [
            'url'
       ];

        return $this->morphTo();
    }
}
