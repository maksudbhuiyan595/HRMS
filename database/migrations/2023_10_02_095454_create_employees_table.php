<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('empDesignation_id');
            $table->foreignId('department_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->unique();
            $table->string('gender');
            $table->date('DOB');
            $table->string('salary');
            $table->string('address');
            $table->date('join_date');
            $table->string('status')->default('0');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
