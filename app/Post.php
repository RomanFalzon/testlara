<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //IF WE MAKE POST MODEL the TABLE NAME automatically withh be POSTS
    //Table Name
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
