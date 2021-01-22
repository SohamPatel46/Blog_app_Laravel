<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['blog_id','user_id','comment'];  //to make it complusary for entering data and neglacting other field
    protected $table = 'comments';

}
