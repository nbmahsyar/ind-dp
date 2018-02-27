<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip',50);
            $table->bigInteger('ktp');
            $table->bigInteger('npwp');
            $table->string('nama_pegawai',100);
            $table->date('tanggal_lahir');
            $table->string('kota_lahir',50);
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('no_telepon',14);
            $table->string('agama',20);
            $table->string('email',100);
            $table->integer('no_rekening');
            $table->text('password');
            $table->text('pas_foto');
            $table->text('scan_ktp');
            $table->text('scan_npwp');
            $table->text('scan_bukutabungan');
            $table->string('username', 50);
            $table->enum('role',['Admin','User'])->default('Admin');
            $table->rememberToken();
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
        Schema::drop('Users');
    }
}
