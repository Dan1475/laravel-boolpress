<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [

    'name',
    'posts_id'

  ];

  function posts(){

    return $this->belongsToMany(Post::class);
  }

}
