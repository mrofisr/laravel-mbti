<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['pria', 'wanita']);
            $table->string('prodi');
            $table->integer('P');
            $table->integer('I');
            $table->integer('J');
            $table->integer('T');
            $table->integer('E');
            $table->integer('N');
            $table->integer('S');
            $table->integer('F');
            $table->char('result', 10);
            $table->char('keterangan', 255);
            $table->string('penjelasan');
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
        Schema::dropIfExists('reports');
    }
}
