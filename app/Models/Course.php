<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['instructor','instructor_des','total', 'price', 'description','title','duration',''];
}
