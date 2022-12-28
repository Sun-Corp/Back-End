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
            $table->integer('Harga');
            $table->integer('JumlahKlik');
            $table->integer('BanyakPembelian');
            $table->string('LinkPreview');
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
        Schema::dropIfExists('template');
    }
};
