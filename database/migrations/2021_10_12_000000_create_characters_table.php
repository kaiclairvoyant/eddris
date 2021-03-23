<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('player_id');
            $table->string('name');
            $table->string('class');
            $table->unsignedTinyInteger('health')->default(100);
            $table->unsignedTinyInteger('mana')->default(100);
            $table->unsignedTinyInteger('stamina')->default(100);
            $table->unsignedTinyInteger('strength');
            $table->unsignedTinyInteger('intelligence');
            $table->unsignedTinyInteger('dexterity');
            $table->unsignedTinyInteger('endurance');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
