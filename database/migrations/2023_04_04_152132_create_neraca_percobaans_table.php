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
        Schema::create('neraca_percobaans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_akun', 8)->nullable();
            $table->string('nama_akun', 100);
            $table->string('s1_ba_sb')->nullable(); // semester 1 berbasis akrual sebelum reviu
            $table->string('s1_bk_sb')->nullable(); // semester 1 berbasis kas sebelum reviu
            $table->string('ta_ba_sb')->nullable(); // tahun xx berbasis akrual sebelum reviu
            $table->string('ta_bk_sb')->nullable(); // tahun xx berbasis kas sebelum reviu

            $table->string('s1_ba_st')->nullable(); // semester 1 berbasis akrual setelah reviu
            $table->string('s1_bk_st')->nullable(); // semester 1 berbasis kas setelah reviu
            $table->string('ujkd')->nullable(); // usulan jurnal koreksi (debit)
            $table->string('ujkk')->nullable(); // usulan jurnal koreksi (kredit)
            $table->string('npsk')->nullable(); // neraca percobaan setelah koreksi
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
        Schema::dropIfExists('neraca_percobaans');
    }
};
