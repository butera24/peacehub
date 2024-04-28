<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillables = [
        'email', 'username','gender','accademic_year','password'
    ];

    protected $hidden =[
        'password'
    ];

}
