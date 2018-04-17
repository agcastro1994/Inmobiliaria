<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';

    public function post() {

		return $this->belongsto(Post::class);

    }
}
