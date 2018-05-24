<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id'); // Ид слайда
            $table->string('title', 100); // Заголовок
            $table->string('alttitle', 255); // Альт тайтл eng для ссылки
            $table->string('description', 255); // Описание
            $table->string('url', 100); // Ссылка
            $table->string('pic', 100); // Картинка
            $table->integer('active'); // Активность
            $table->integer('church'); // Церковь
            $table->integer('user_id'); // Автор
            $table->timestamp('published_at')->nullable(); // Дата публикации
            $table->timestamps(); // Дата редактирования/добавления
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
