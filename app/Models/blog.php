<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable = ['title','user_id','blog_content'];  //to make it complusary for entering data and neglacting other field
    
    public function userInverse()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function blogComment()
    {
        return $this->belongsToMany('App\Models\User','comments','blog_id','user_id')->withPivot(['comment','id']);
    }   

}
