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
            // add column lat, long masuk, lat, long pulang
            $table->text('keterangan_masuk')->nullable()->after('jam_masuk');
            $table->double('lat_masuk')->nullable()->after('keterangan_masuk');
            $table->double('long_masuk')->nullable()->after('lat_masuk');
            $table->double('lat_pulang')->nullable()->after('long_masuk');
            $table->double('long_pulang')->nullable()->after('lat_pulang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('presensi', function (Blueprint $table) {
            $table->dropColumn('keterangan_masuk');
            $table->dropColumn('lat_masuk');
            $table->dropColumn('long_masuk');
            $table->dropColumn('lat_pulang');
            $table->dropColumn('long_pulang');
        });
    }
};
