<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'addblog';
    
    public function comments()
    {
        return $this->hasMany(Blogcomment::class);
    }

}
