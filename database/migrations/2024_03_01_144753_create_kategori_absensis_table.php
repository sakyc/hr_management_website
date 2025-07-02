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
        Schema::create('kategori_absensi', function (Blueprint $table) {
            // $table->uuid('id')->primary();

            $table->id();
            $table->string('kode', 3)->unique();
            $table->string('nama', 50);
            $table->boolean('status')->default(1);
            $table->enum('jenis', ['Presensi', 'Absensi']);
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_absensi');
    }
};
