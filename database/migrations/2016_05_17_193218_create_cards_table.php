<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('name');
            $table->string('set');
            $table->string('type');
            $table->string('faction');
            $table->string('rarity');
            $table->string('cost');
            $table->string('attack');
            $table->string('health');
            $table->string('durability');
            $table->string('set');
            $table->string('type');
            $table->string('');
            $table->string('name');
            $table->string('set');
            $table->string('type');
            $table->string('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cards');
    }
}
