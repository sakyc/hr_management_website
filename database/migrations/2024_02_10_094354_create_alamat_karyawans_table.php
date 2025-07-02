<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('alamat_karyawan', function (Blueprint $table) {
    //         $table->uuid('id')->primary();
    //         $table->uuid('karyawan_id');
    //         $table->string('alamat', 100);
    //         $table->char('rt', 3);
    //         $table->char('rw', 3);
    //         $table->string('kelurahan', 30);
    //         $table->string('kec', 30);
    //         $table->string('kab', 30);
    //         $table->string('prov', 30);

    //         $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('alamat_karyawan');
    // }
};
