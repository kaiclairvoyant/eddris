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
            $table->string('name');
            $table->string('class')->default('novice');
            $table->unsignedSmallInteger('health')->default(100);
            $table->unsignedSmallInteger('mana')->default(100);
            $table->unsignedSmallInteger('stamina')->default(100);
            $table->unsignedTinyInteger('strength');
            $table->unsignedTinyInteger('intelligence');
            $table->unsignedTinyInteger('dexterity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
