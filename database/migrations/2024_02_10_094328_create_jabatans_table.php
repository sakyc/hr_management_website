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
        Schema::create('jabatan', function (Blueprint $table) {
            // $table->uuid('id')->primary();

            $table->id();
            // $table->uuid('divisi_id');
            $table->string('nama_jabatan', 50);
            $table->boolean('status');
            $table->unsignedBigInteger('created_by');
            // $table->decimal('gaji_pokok', 15, 2);
            // $table->decimal('tunjangan_jabatan', 15, 2)->default(0);
            // $table->decimal('lembur_per_jam', 15, 2)->default(0);
            // $table->foreign('divisi_id')->references('id')->on('divisi');
            $table->foreign('created_by')->references('id')->on('admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jabatan');
    }
};
