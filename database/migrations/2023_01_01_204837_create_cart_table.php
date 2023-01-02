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
        Schema::create('carts', function (Blueprint $table) {
            $table->id('CartID', 12);
            $table->unsignedBigInteger('AccountID');
            $table->unsignedBigInteger('TemplateID');
            $table->foreign('AccountID')
                ->references('AccountID')->on('accounts')->onDelete('cascade');
            $table->foreign('TemplateID')
                ->references('TemplateID')->on('templates')->onDelete('cascade');
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
        Schema::dropIfExists('carts');
    }
};
