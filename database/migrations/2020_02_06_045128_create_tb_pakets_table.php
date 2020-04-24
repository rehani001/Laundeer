<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pakets', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_outlet')->unsigned();
            $table->enum('jenis', ['Kiloan', 'Selimut', 'Bed_Cover', 'Kaos', 'Lain']);
            $table->string('nama_paket', 100);
            $table->integer('harga');
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
        Schema::dropIfExists('tb_pakets');
    }
}
