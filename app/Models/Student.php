<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Semester;

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
        'stage_id',
        'department',
        'student_id_path',
        'enrollment_proof_path',
        'verification_notes',
        'status'
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
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_student')
            ->withPivot('status', 'created_at', 'updated_at');
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }



}


