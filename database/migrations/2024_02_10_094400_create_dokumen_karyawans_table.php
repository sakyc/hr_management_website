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
        // Schema::create('dokumen_karyawan', function (Blueprint $table) {
        //     $table->uuid('id')->primary();
        //     $table->uuid('karyawan_id');
        //     $table->string('nama_dokumen', 50);
        //     $table->string('file', 100);
        //     $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('dokumen_karyawan');
    }
};
