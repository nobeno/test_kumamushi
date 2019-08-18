<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = [
        'name' ,
        'barth' ,
        'profile' ,
        'image_path' ,
        'goal1' ,
        'goal2' ,
        'goal3' ,
        'deadline1' ,
        'deadline2' ,
        'deadline3' ,
        'detail1' ,
        'detail2' ,
        'detail3'
         ];
}
