<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_mhs', function (Blueprint $table) {
            $table->id();
			$table->char('nim',11)->nullable();
            $table->string('nama',100)->nullable();
            $table->enum('jk',['L','P'])->nullable();
            $table->string('alamat',100)->nullable();
            $table->string('kota',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('gambar',50);
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
        Schema::dropIfExists('tbl_mhs');
    }
}
