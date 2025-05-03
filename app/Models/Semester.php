<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'semesters';

    // Specify the primary key (optional if it's 'id')
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Optionally add the inverse relationship
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
