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
        Schema::create('relawan_manuals', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('alamat');
            $table->string('no_handphone');
            $table->enum('posisi', ['Relawan', 'Pemilih']);
            $table->string('pengajak');
            $table->enum('status', ['Proses', 'Terverifikasi']);
            $table->enum('warna', ['Hijau', 'Kuning', 'Merah'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relawan_manuals');
    }
};
