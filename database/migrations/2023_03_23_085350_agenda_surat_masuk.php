<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgendaSuratMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('agenda_surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penerima');
            $table->string('no_surat')->nullable();
            $table->string('no_urut');
            $table->date('tanggal_input');
            $table->date('tanggal_surat');
            $table->string('perihal');
            $table->string('tujuan');
            $table->integer('lembar_lampiran');
            $table->string('sifat_surat');
            $table->string('jenis_surat');
            $table->string('keamanan_surat');
            $table->string('instansi_pengirim');
            $table->string('nama_penandatangan');
            $table->string('jabatan_penandatangan');
            $table->string('nip_penandatangan');
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
        Schema::dropIfExists('agenda_surat_masuk');
    }
}
