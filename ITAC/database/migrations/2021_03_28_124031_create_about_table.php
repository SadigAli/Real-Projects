<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('caption_az');
            $table->string('caption_en');
            $table->string('caption_ru');
            $table->string('title_az',500);
            $table->string('title_en',500);
            $table->string('title_ru',500);
            $table->string('description_az',1500);
            $table->string('description_en',1500);
            $table->string('description_ru',1500);
            $table->string('signature');
            $table->string('img_1');
            $table->string('img_2');
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
        Schema::dropIfExists('about');
    }
}
