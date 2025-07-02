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
        // Schema::create('divisi', function (Blueprint $table) {
        //     $table->uuid('id')->primary();
        //     $table->string('nama_divisi', 50);
        //     $table->boolean('status');
        //     $table->uuid('created_by');

        //     $table->foreign('created_by')->references('id')->on('admin');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('divisi');
    }
};
