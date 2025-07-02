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
        Schema::create('karyawan', function (Blueprint $table) {
            // $table->uuid('id')->primary();

            $table->id();
            $table->unsignedBigInteger('jabatan_id');
            $table->char('nip', 10)->unique();
            $table->string('nama_karyawan', 60);
            $table->string('tmp_lahir', 50);
            $table->date('tgl_lahir');
            $table->enum('jk', ['L', 'P']);
            $table->date('tgl_masuk');
            $table->string('foto', 100);
            // $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']);
            // $table->string('email', 50);
            $table->string('no_hp', 15);
            $table->unsignedBigInteger('created_by');
            $table->enum('status', ['Aktif', 'Resign', 'Cuti'])->default('Aktif');
            $table->foreign('jabatan_id')->references('id')->on('jabatan');
            $table->foreign('created_by')->references('id')->on('admin');
            $table->string('password');
            $table->enum('pendidikan_terkhir', ['SD/MI', 'SMP/MTs', 'SMA/SMK/MA', 'D1/Diploma 1', 'D2/Diploma 2', 'D3/Diploma 3', 'S1/Sarjana', 'S2/Magister', 'S3/Doktor']);
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
