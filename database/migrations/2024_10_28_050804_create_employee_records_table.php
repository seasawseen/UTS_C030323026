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
        Schema::create('employee_records', function (Blueprint $table) {
            $table->id();
            $table->string('employee_records_number')->unique();
            $table->string('first_name'); // Nama depan karyawan
            $table->string('last_name'); // Nama belakang karyawan
            $table->string('position'); // Jabatan atau posisi karyawan
            $table->string('department'); // Departemen karyawan
            $table->date('date_of_joining'); // Tanggal bergabung
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status karyawan (aktif/tidak aktif)
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_records');
    }
};
