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
        Schema::create('absensi', function (Blueprint $table) {
            // $table->uuid('id')->primary();

            $table->id();
            $table->unsignedBigInteger('karyawan_id');
            $table->date('tanggal');
            // $table->date('sampai_tanggal');
            $table->unsignedBigInteger('kategori_absensi_id');
            $table->text('keterangan')->nullable();
            $table->enum('status', ['Pending', 'Disetujui', 'Ditolak'])->default('Pending');
            $table->unsignedBigInteger('verified_by')->nullable();
            $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
            $table->foreign('kategori_absensi_id')->references('id')->on('kategori_absensi');
            $table->foreign('verified_by')->references('id')->on('admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};
