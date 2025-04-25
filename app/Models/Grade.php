<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    protected $table = 'grades_students';
    protected $fillable = ['student_id', 'subject_id', 'teacher_id', 'semester_id', 'midterm', 'final', 'practical', 'comments', 'total'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}