<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['student_code', 'student_name', 'gender', 'grade', 'address', 'email', 'GPA'];
}
