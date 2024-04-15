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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->decimal('price')->unsigned(); // decimal - це числа, які мають нецілі знацення. Наприклад 10.55 Для грошей те, що треба
            $table->boolean('active')->default(true);
            $table->integer('sort')->unsigned()->default(999);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
};
