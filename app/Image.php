<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    /* Comentarios como likes, existen muchos, entonces las relaciones 
    tienes que ser de uno a muchos (hasMany)*/
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function likes(){
        return $this->hasMany('App\like');
    }

    /* Para todos esos comentarios y likes hay un solo usuario Con lo que 
    es belongTo */
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
