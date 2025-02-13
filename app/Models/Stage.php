<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class stage extends Authenticatable
{
    // Define the table name (optional if Laravel's naming convention is followed)
    protected $table = 'stages';

    // Specify the primary key (optional if it's 'id')
    protected $primaryKey = 'id';

    // Fillable attributes
    protected $fillable = [
        'name',

    ];
    // Hide sensitive attributes from serialization


    // Automatically cast date fields to Carbon instances
    protected $dates = [
        'created_at',
        'updated_at',
    ];

}


