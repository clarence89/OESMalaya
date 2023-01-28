<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectSchedule extends Model
{
    use HasFactory;
    protected $fields =
    [
        'section_id',
        'subject_id',
        'time_start',
        'time_end',
        'subject_room',
        'subject_teacher',
    ];
    public function subject()
    {
        return $this->belongsTo(Subjects::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
