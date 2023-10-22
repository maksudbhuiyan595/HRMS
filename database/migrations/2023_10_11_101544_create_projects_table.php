<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('status')->default('active');
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('department_id'); 
            $table->foreignId('employee_id'); 
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
