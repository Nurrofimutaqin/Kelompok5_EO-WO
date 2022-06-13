<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_paketDetail')
                ->constrained('paket_detail')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('id_user')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('tgl_booking');
            $table->enum('status', ['sudah bayar', 'belum bayar']);
            $table->string('bukti_bayar', 100)->nullable();
            $table->date('tgl_bayar')->nullable();
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
        Schema::dropIfExists('booking');
    }
}
