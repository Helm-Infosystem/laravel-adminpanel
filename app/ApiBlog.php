<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiBlog extends Model
{
    protected $table = 'blogs';
    protected $fillable =['name','slug'];
}
