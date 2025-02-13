<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins'; // Specify the table name if different
    protected $fillable = ['email', 'password']; // Add other fields as necessary
}
