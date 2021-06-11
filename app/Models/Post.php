<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','body','created_at','updated_at','img'];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function userLike(){
        return $this->belongsToMany(User::class);
    }

}


