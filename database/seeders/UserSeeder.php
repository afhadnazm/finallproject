<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Admin;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'first_name' => 'afhad',
            'last_name' => 'nazm',
            'email' => 'afhadnazm@gmail.com',
            'password' => bcrypt('Af7122001'),
            'created_at' => now(),

        ]);
    }
}
