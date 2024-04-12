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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            // Тепер мені траба установити звязок між цими постами і юзерами, які створюють ці пости.
            // По замовчуванню від тепер ці 2 таблиці будуть звязвні і я не зможу наприклад створити пост, невказавши юзера. Або видалити юзера до якого привязані пости
            $table->bigInteger('user_id')->unsigned(); // Поле не випадково називається user_id - потім це знадобиться. Тобто це таблиця user і його поле id. unsigned() - це абсолютні числа
            // $table->foreignUlid('user_id'); // скорочений варіант верхнього рядка
            $table->foreign('user_id')->references('id')->on('users'); // Конкретно вказую, що я звязую це поле user_id з полем id у таблиці users
            // $table->foreignId('user_id')->constrained('users'); // Скорочений варіант цих всіх привязок. Навіть можна так написати - $table->foreignId('user_id')->constrained() і із за того, шо я вказав user_id, ларавель зрозуміє, що це таблиця users

            $table->string('title');
            $table->text('content');
            $table->boolean('published')->default(true);
            $table->timestamp('published_at')->nullable(); // при додаванні кастомних дат, ЗАВЖДИ треба додавати ->nullable() - Це просто правило

            $table->string('meta_title');
            $table->string('meta_description');

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
        Schema::dropIfExists('posts');
    }
};
