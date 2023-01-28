<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;
    protected $fields = [
        'user_id',
        'subject_id',
        'student_year_id',
        'grade',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function year()
    {
        return $this->belongsTo(StudentYear::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subjects::class);
    }
}
