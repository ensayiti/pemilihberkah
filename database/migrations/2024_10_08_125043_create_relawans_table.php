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
        Schema::create('relawans', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('alamat');
            $table->string('no_handphone');
            $table->enum('posisi', ['Relawan', 'Pemilih']);
            $table->string('pengajak');
            $table->string('foto_diri')->nullable();
            $table->enum('status', ['Proses', 'Terverifikasi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relawans');
    }
};
