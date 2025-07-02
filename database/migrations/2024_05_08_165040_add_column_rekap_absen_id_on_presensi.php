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
            $table->unsignedBigInteger('rekap_absen_id')->nullable()->after('keterangan_keluar');
            $table->foreign('rekap_absen_id')->references('id')->on('rekap_absen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('presensi', function (Blueprint $table) {
            $table->dropForeign(['rekap_absen_id']);
            $table->dropColumn('rekap_absen_id');
        });
    }
};
