<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable =  ['user_id', 'title', 'link', 'image','discount'];

    public function user()
   {
     return $this->belongsTo(User::class);
   }
}

