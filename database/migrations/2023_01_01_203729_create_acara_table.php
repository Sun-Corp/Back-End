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
        Schema::create('acaras', function (Blueprint $table) {
            $table->id('AcaraID', 12);
            $table->unsignedBigInteger('AccountID');
            $table->string('NamaTemplate', 24);
            $table->string('NamaTema', 24);
            $table->string('KodeAcara', 12);
            $table->string('Tanggal', 12);
            $table->string('Lokasi', 48);
            $table->string('CalonL', 48);
            $table->string('CalonP', 48);
            $table->string('AyahL', 48);
            $table->string('IbuL', 48);
            $table->string('AyahP', 48);
            $table->string('IbuP', 48);
            $table->foreign('AccountID')
                ->references('AccountID')->on('accounts')->onDelete('cascade');
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
        Schema::dropIfExists('acaras');
    }
};
