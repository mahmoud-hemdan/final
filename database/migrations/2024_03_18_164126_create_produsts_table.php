<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdustsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produsts', function (Blueprint $table) {
            $table->id();
            $table->string('produsts_image');
            $table->string('produsts_name');
            $table->string('produsts_description');
            $table->string('produsts_prise');
            $table->string('produsts_quantity');
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
        Schema::dropIfExists('produsts');
    }
}
