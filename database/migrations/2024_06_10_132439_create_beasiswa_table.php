<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description_short'); // Deskripsi singkat
            $table->text('description_long'); // Deskripsi lebih panjang
            $table->string('image')->nullable();
            $table->dateTime('waktu');
            $table->string('tempat');
            $table->integer('kuota');
            $table->text('sasaran')->nullable(); // Kolom untuk sasaran
            $table->text('persyaratan')->nullable(); // Kolom untuk persyaratan
            $table->text('berkas_pendaftaran')->nullable(); // Kolom untuk berkas pendaftaran
            $table->text('mekanisme_pendaftaran')->nullable(); // Kolom untuk mekanisme pendaftaran
            $table->text('seleksi_berkas')->nullable(); // Kolom untuk seleksi berkas
            $table->text('jadwal_beasiswa')->nullable(); // Kolom untuk jadwal beasiswa
            $table->text('kontak')->nullable(); // Kolom untuk kontak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beasiswa');
    }
}
