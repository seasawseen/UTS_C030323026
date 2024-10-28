<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_trackings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employee_records')->onDelete('cascade'); // Foreign Key ke tabel employees
            $table->date('date'); // Tanggal kehadiran
            $table->time('check_in')->nullable(); // Waktu masuk
            $table->time('check_out')->nullable(); // Waktu keluar
            $table->enum('status', ['present', 'absent', 'leave', 'sick'])->default('present'); // Status kehadiran (hadir, izin, cuti, sakit)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_trackings');
    }
};
