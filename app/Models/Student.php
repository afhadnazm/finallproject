<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    // Define the table name (optional if Laravel's naming convention is followed)
    protected $table = 'students';

    // Specify the primary key (optional if it's 'id')
    protected $primaryKey = 'id';

    // Fillable attributes
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'department',
        'stage_id',
        'status',
        'student_id_path',
        'enrollment_proof_path',
        'rejection_reason'
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
    public function teacherAssignments()
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


