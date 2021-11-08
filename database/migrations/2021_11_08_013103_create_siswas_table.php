<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->string('nis', 20)->primary();
            $table->string('nama', 20);
            $table->string('jk', 1);
            $table->string('alamat')->nullable();
            $table->string('tmp_lahir', 50);
            $table->string('tgl_lahir');
            $table->string('telepon', 20)->nullable();
            $table->string('id_jurusan', 11);
            // $table->integer('nilai', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
