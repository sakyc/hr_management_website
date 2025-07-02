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
            // add keterangan keluar and change keterangan to keterangan masuk
            $table->text('keterangan_keluar')->nullable()->after('keterangan_masuk');
            // $table->renameColumn('keterangan', 'keterangan_masuk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('presensi', function (Blueprint $table) {
            // drop keterangan keluar and change keterangan masuk to keterangan
            $table->dropColumn('keterangan_keluar');
            // $table->renameColumn('keterangan_masuk', 'keterangan');
        });
    }
};
