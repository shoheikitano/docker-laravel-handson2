<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    protected $guarded = array('id');

    public function user() {
        return $this->belongsTo('App\User');
    }
}
