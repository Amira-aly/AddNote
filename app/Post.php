<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','content', 'date', 'time','user_id'
    ];

    public function user(){
        return $this->belongsTo(user::class ,'user_id');
    }

}
