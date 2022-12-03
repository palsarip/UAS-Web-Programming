<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('alamat', 3);
            $table->dateTime('waktu_checkin')->default('1111-11-11 00:00:00');
            $table->dateTime('waktu_checkout')->default('1111-11-11 00:00:00');
            $table->boolean('status')->default(false);
            $table->date('tanggal_reservasi');
            $table->time('jam_reservasi_mulai');
            $table->time('jam_reservasi_selesai');
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
        Schema::dropIfExists('history');
    }
};
