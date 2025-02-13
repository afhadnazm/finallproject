<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'first_name' => 'marwa',
            'last_name' => 'ameer',
            'email' => 'marwaameer@gmail.com',
            'password' => bcrypt('Af7122001'),
            'stage_id' => '4',
            'department' => 'ISE',

        ]);
    }
}
