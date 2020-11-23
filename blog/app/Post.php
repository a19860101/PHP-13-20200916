<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','content'];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
    public function toTagString(){
        $tagTitle = [];
        foreach($this->tags as $tag){
            $tagTitle[] = $tag->title;
        }
        $tagString = implode(',',$tagTitle);
        return $tagString;
    }
}
