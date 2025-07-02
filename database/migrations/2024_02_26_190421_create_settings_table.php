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
        Schema::create('pengaturan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan', 100);
            $table->string('alamat', 255);
            $table->double('lat')->nullable();
            $table->double('long')->nullable();
            $table->integer('radius_absen')->default(100);
            $table->string('logo', 255)->nullable();
            $table->time('jam_masuk')->nullable()->default('09:00:00');
            $table->time('jam_pulang')->nullable()->default('17:00:00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturan');
    }
};
