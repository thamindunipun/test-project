<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // protected $fillable=[
    //     'title',
    //     'Description',
    //     'image',
    // ];

    public function  Posts(){
        $this->hasMany(Post::class,'id','post_id');
    }
}
