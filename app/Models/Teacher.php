<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    // Define the table name (optional if Laravel's naming convention is followed)
    protected $table = 'teachers';

    // Specify the primary key (optional if it's 'id')
    protected $primaryKey = 'id';

    // Fillable attributes
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'subject_title',
        'department',
    ];
    // Hide sensitive attributes from serialization
    protected $hidden = [
        'password',
    ];

    // Automatically cast date fields to Carbon instances
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    public function students()
    {
        return $this->belongsToMany(Student::class, 'teacher_assignments')
            ->using(TeacherAssignment::class)
            ->withPivot('teacher_id', 'student_id', 'assignment_title', 'midterm', 'quiz', 'homework', 'activity', 'final', 'total')  // Include new fields here
            ->withTimestamps();
    }
    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }
}


