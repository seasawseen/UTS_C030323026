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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id(); // Primary Key (id penggajian)
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade'); // Foreign Key ke tabel employees
            $table->string('pay_period'); // Periode gaji (misalnya, "Oktober 2024")
            $table->decimal('basic_salary', 15, 2); // Gaji pokok
            $table->decimal('allowances', 15, 2)->default(0); // Tunjangan
            $table->decimal('deductions', 15, 2)->default(0); // Potongan
            $table->decimal('net_salary', 15, 2); // Gaji bersih (setelah potongan)
            $table->timestamps(); // Kolom created_at dan updated_at
        //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
