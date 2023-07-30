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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_satker');
            $table->integer('direviu');
            $table->string('instansi');
            $table->string('satker');
            $table->string('email_satker');
            $table->string('at');
            $table->string('email_at');
            $table->string('kt');
            $table->string('email_kt');
            $table->string('pt');
            $table->string('email_pt');
            $table->string('akuntan');
            $table->string('email_akuntan');
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
        Schema::dropIfExists('penggunas');
    }
};
