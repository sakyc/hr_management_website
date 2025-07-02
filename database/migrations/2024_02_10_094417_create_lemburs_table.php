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
        Schema::create('lembur', function (Blueprint $table) {
            // $table->uuid('id')->primary();

            $table->id();
            $table->unsignedBigInteger('karyawan_id');
            $table->date('tanggal');
            $table->date('tanggal_keluar');
            $table->time('jam_masuk');
            $table->time('jam_keluar')->nullable();
            $table->string('status', 15)->comment('pending/ditolak/disetujui');
            $table->string('keterangan')->nullable();
            $table->unsignedBigInteger('verified_by')->nullable();
            $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
            $table->foreign('verified_by')->references('id')->on('admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembur');
    }
};
