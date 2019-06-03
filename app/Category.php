<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [

    'name'


  ];

  function posts(){

    return $this->belongsToMany(Post::class);
  }



}
