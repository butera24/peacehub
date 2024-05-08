<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'password','department'
    ];

    protected $hidden =[
        'password'
    ];
}
