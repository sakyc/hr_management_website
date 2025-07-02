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
        // Schema::create('kantor', function (Blueprint $table) {
        //     $table->uuid('id')->primary();
        //     $table->string('nama_kantor', 100);
        //     $table->string('alamat', 100);
        //     $table->double('latitude');
        //     $table->double('longitude');
        //     $table->char('created_by', 36);
        //     $table->foreign('created_by')->references('id')->on('admin')->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('kantor');
    }
};
