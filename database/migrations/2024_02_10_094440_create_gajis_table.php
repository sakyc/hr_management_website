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
        // Schema::create('slip_gaji', function (Blueprint $table) {
        //     $table->uuid('id');
        //     $table->uuid('karyawan_id');
        //     $table->uuid('jabatan_id');
        //     $table->date('tanggal');
        //     $table->integer('gaji_pokok');
        //     $table->integer('tunjangan');
        //     $table->integer('lembur');
        //     $table->integer('potongan');

        //     $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
        //     $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('gaji');
    }
};
