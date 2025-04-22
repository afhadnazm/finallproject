<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class pending_student extends Authenticatable
{
    // Define the table name (optional if Laravel's naming convention is followed)
    protected $table = 'pending_students';

    // Specify the primary key (optional if it's 'id')
    protected $primaryKey = 'id';

    // Fillable attributes
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'stage_id_path',
        'department',
        'student_id_path',
        'enrollment_proof_path',
        'verification_notes',

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



}


