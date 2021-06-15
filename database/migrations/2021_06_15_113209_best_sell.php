<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BestSell extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell', function (Blueprint $table) {
            $table->id();
            $table->string('place', 128) -> comment('Платформа');
            $table->string('genre', 40) -> comment('Жанр');
            $table->string('create', 40) -> comment('Издатель');
            $table->string('game_name',128) -> comment('Название игры');
            $table->string('image',128) -> nullable() -> comment('Изображение');
            $table->decimal('price', 12,2)->comment('Цена');
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
        Schema::dropIfExists('books');
    }
}
