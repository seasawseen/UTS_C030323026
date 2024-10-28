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
        Schema::create('reports', function (Blueprint $table) {
            $table->id(); // Primary Key (id laporan)
            $table->foreignId('employee_id')->nullable()->constrained('employees')->onDelete('cascade'); // Foreign Key ke tabel employees (nullable, karena laporan bisa umum)
            $table->string('report_type'); // Jenis laporan (misalnya, "kehadiran", "gaji")
            $table->date('generated_date'); // Tanggal laporan dibuat
            $table->text('description')->nullable(); // Deskripsi atau catatan tambahan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
