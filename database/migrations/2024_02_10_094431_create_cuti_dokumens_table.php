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
        // Schema::create('cuti_dokumen', function (Blueprint $table) {
        // $table->uuid('id')->primary();
        // $table->uuid('cuti_id');
        // $table->string('nama_file', 50);
        // $table->string('file', 100);

        // $table->foreign('cuti_id')->references('id')->on('cuti')->onDelete('cascade');
        // $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('cuti_dokumen');
    }
};
