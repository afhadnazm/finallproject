<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Subject name
            $table->foreignId('stage_id')->constrained('stages')->onDelete('cascade');
            $table->foreignId('semester_id')->constrained('semesters')->onDelete('cascade');
            $table->unsignedBigInteger('teacher_id')->nullable(); // Linked to teacher
            $table->timestamps();

            // Foreign key
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
