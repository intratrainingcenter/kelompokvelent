<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('nisn',30);
            $table->string('nama',25);
            $table->enum('jenis_kelamin',array('pria', 'wanita', 'unknown'))->default('unknown'));
            $table->date('tanggal_lahir');
            $table->string('jurusan',15);
            $table->integer('kelas',2);
            $table->string('subkelas',1);
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
        Schema::dropIfExists('siswas');
    }
}
