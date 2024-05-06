<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name', 'username', 'password', 'age', 'gender', 'email', 'university_id', 'major', 'year', 'contact_number', 'address'];

    protected $hidden =[
        'password'
    ];

}
