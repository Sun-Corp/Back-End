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
        Schema::create('templates', function (Blueprint $table) {
            $table->id('TemplateID', 12);
            $table->string('NamaTemplate', 24);
            $table->string('NamaTema', 24);
            $table->string('Jenis');
            $table->integer('Harga');
            $table->integer('JumlahKlik');
            $table->integer('BanyakPembelian');
            $table->string('LinkPreview');
            $table->string('LinkPreview2');
            $table->string('LinkPreview3');
            $table->string('LinkPreview4');
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
        Schema::dropIfExists('templates');
    }
};
