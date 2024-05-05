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
        Schema::create('pasien_ugdinap', function (Blueprint $table) {
            $table->string('nik')->primary();
            $table->string('nama_lengkap');
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('instalasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien_ugdinap');
    }
};