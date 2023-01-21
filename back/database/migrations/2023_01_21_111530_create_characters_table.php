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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('image', 255);
            $table->string('name', 65);
            $table->text('description');

            $table->integer('execution');
            $table->integer('poking');
            $table->integer('keepout');
            $table->integer('damage_output');
            $table->integer('throw_game');
            $table->integer('evasiveness');
            $table->integer('movement');
            $table->integer('mixup');
            $table->integer('party');
            $table->integer('space_control');
            $table->integer('okizeme');

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
        Schema::dropIfExists('characters');
    }
};
