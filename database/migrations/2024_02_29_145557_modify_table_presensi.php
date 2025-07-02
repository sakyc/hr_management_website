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
        Schema::table('presensi', function (Blueprint $table) {
            // add column duration 
            $table->time('durasi_kerja')->nullable()->after('jam_keluar');
            $table->time('telat')->nullable()->after('jam_masuk');
            $table->time('pulang_cepat')->nullable()->after('jam_keluar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('presensi', function (Blueprint $table) {
            $table->dropColumn('durasi_kerja');
            $table->dropColumn('telat');
            $table->dropColumn('pulang_cepat');
        });
    }
};
