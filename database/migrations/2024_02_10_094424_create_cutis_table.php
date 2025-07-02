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
        // Schema::create('cuti', function (Blueprint $table) {
        // $table->uuid('id')->primary();
        //     $table->uuid('karyawan_id');
        //     $table->date('tanggal_mulai');
        //     $table->date('tanggal_selesai');
        //     $table->string('jenis', 30)->comment('Sakit, Melahirkan, Pernikahan, Keperluan Pribadi Tahunan');
        //     $table->string('keterangan')->nullable();
        //     $table->string('status', 20)->comment('pending,ditolak,disetujui');

        //     $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('cuti');
    }
};
