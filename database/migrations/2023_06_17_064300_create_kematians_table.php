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
        Schema::create('kematians', function (Blueprint $table) {
            $table->id();
            $table->string('pelapor');
            $table->string('hubungan');
            $table->string('nama');
            $table->bigInteger('NIK');
            $table->integer('umur');
            $table->string('agama');
            $table->string('rt_rw');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('hari');
            $table->date('tanggal');
            $table->string('penyebab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kematians');
    }
};
