<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Friend extends Model
{
    use HasFactory;

    protected $fillable = ['user_id_1','user_id_2','created_at','updated_at'];

    public function user1() {
        return $this->belongsTo(User::Class, 'user_id_1');
    }
    public function user2() {
        return $this->belongsTo(User::Class, 'user_id_2');
    }

}
