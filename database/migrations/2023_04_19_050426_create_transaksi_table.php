<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('kode_transaksi');
            $table->date('tanggal');
            $table->integer('harga');
            $table->string('bukti_pembayaran');
            $table->string('nama_akun_bank');
            $table->string('nama_bank');
            $table->foreignId('id')->nullable()->constrained('users')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('kode_pembayaran')->nullable()->constrained('metode_pembayaran')->onUpdate('cascade')
            ->onDelete('cascade')->references('kode_pembayaran')->on('metode_pembayaran');
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
        Schema::dropIfExists('transaksi');
    }
}