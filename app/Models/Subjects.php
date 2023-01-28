<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;
    protected $fields = ['subject_name'];

    public function schedules()
    {
        return $this->hasMany(SubjectSchedule::class);
    }
    public function grades()
    {
        return $this->hasMany(SubjectSchedule::class);
    }
}
