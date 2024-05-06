<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'student_id',
        'likes',
        'comments',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
