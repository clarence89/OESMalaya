<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fields = [
        'student_year_id',
        'section_name',
        'section_capacity',
        'section_room',
        'section_adviser',
    ];
    public function year_level()
    {
        return $this->belongsTo(StudentYear::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function schedules()
    {
        return $this->hasMany(SubjectSchedule::class);
    }
}
