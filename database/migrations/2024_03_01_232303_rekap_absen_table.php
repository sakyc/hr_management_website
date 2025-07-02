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
        // creata table
        Schema::create('rekap_absen', function (Blueprint $table) {
            // $table->uuid('id')->primary();

            $table->id();
            $table->unsignedBigInteger('karyawan_id');
            $table->date('tanggal');
            // $table->string('jenis', 50);
            $table->unsignedBigInteger('kategori_absensi_id')->nullable();
            // $table->uuid('absensi_id')->nullable();
            // $table->uuid('presensi_id')->nullable();
            $table->timestamps();

            $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
            // $table->foreign('absensi_id')->references('id')->on('absensi')->onDelete('cascade');
            // $table->foreign('presensi_id')->references('id')->on('presensi')->onDelete('cascade');
            $table->foreign('kategori_absensi_id')->references('id')->on('kategori_absensi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_absen');
    }
};
