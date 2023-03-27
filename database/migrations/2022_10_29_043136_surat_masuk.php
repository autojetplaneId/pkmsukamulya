<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuratMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penerima');
            $table->string('no_surat')->nullable();
            $table->date('tanggal_registrasi');
            $table->date('tanggal_surat');
            $table->string('perihal');
            $table->string('tujuan');
            $table->integer('lembar_lampiran');
            $table->string('sifat_surat');
            $table->string('jenis_surat');
            $table->string('keamanan_surat');
            $table->string('instansi_pengirim');
            $table->string('nama_pengirim');
            $table->string('jabatan_pengirim');
            $table->string('nip_pengirim');
            $table->timestamps();

            //relationship id Penerima
            $table->foreign('id_penerima')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('registrasi_surat_masuk');
    }
}
