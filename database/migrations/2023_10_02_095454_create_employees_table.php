<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('role_id')->constrained('roles');
            $table->string('emp_name');
            $table->string('emp_email')->unique();
            $table->string('emp_phone')->unique();
            $table->string('emp_address')->nullable();
            $table->string('emp_status')->default('active');
            $table->string('emp_img')->nullable();
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
