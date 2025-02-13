<?php

// database/migrations/xxxx_xx_xx_create_students_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Creates an 'id' column as BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('stage_id')->constrained('stages')->cascadeOnDelete();
            $table->string('department')->nullable();
            $table->timestamps();



        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
