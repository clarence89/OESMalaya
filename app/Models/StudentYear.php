<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentYear extends Model
{
    use HasFactory;
    protected $fields = ['student_year_level'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_years');
    }
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    public function grades()
    {
        return $this->hasMany(Grades::class);
    }
}
