<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'duration', 'category_id',
    ];

    public function course_records()
    {
        return $this->hasMany(CourseRecord::class);
    }
}