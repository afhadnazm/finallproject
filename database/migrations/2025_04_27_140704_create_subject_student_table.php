<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectStudentTable extends Migration
{
    public function up()
    {
        Schema::create('subject_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Status of submission
            $table->timestamps();

            // Foreign keys
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

            // To avoid duplicate subject-student assignments
            $table->unique(['student_id', 'subject_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('subject_student');
    }
}
