<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TeacherAssignment extends Pivot
{
    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'teacher_assignments';

    // If you have any additional attributes, you can specify them here
    protected $fillable = ['teacher_id', 'student_id', 'assignment_title', 'midterm', 'quiz', 'homework', 'activity', 'final', 'total'];

    // Optionally, you can add custom methods or accessors for the pivot table

}
