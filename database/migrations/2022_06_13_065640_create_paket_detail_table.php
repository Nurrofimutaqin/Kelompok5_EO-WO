<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_paket')
                ->constrained('paket')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nama_paketDetail', 30);
            $table->text('deskripsi');
            $table->string('harga', 30);
            $table->string('foto', 100);
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
        Schema::dropIfExists('paket_detail');
    }
}
