<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogcomment extends Model
{
    protected $table = 'commentblog';

      public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
