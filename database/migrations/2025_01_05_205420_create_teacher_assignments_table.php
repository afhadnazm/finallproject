<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createteacherassignmentstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers')->cascadeOnDelete();
            $table->unsignedBigInteger('student_id');
            $table->string('assignment_title')->nullable();
            $table->decimal('Midterm', 5, 2)->nullable();
            $table->decimal('Quiz', 5, 2)->nullable();
            $table->decimal('Homework', 5, 2)->nullable();
            $table->decimal('Activity', 5, 2)->nullable();
            $table->decimal('Final', 5, 2)->nullable();
            $table->decimal('Total', 5, 2)->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

            // Unique constraint (optional, to prevent duplicate entries)
            $table->unique(['teacher_id', 'student_id'], 'teacher_student_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_assignments');
    }
}

