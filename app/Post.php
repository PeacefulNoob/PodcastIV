<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   // Table Name
   protected $table = 'posts';
   // Primary Key
   public $primaryKey = 'id';
   // Timestamps
   public $timestamps = true;

   public function user(){
       return $this->belongsTo('App\User');
   }
   public function comments()
   {
       return $this->hasMany(Comment::class);
   }
   public function addComment($body)
   {
        Comment::create([
            'body' => request('body') ,
            'name' => request('name'),
            'email' => request('email'),
            'post_id' => $this->id
        ]);
   }

   public function categories_post()
   {
       return $this->belongsTo('App\Categories_post','cat_id');
   }
}
