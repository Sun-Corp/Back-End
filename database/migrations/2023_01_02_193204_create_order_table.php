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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('OrderID', 12);
            $table->unsignedBigInteger('AcaraID');
            $table->integer('TemplateID');
            $table->boolean('InvoiceStatus');
            $table->boolean('VerifikasiStatus');
            $table->boolean('OrderStatus');
            $table->string('URL');
            $table->foreign('AcaraID')
                ->references('AcaraID')->on('acaras')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
};
