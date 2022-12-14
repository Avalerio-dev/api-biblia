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
        Schema::create('words', function (Blueprint $table) {
            $table->id('wordId');
            $table->string('word');
            $table->tinyInteger('bookNum')->index();
            $table->foreign('bookNum')
                ->references('id')->on('books');
            $table->tinyInteger('chNum');
            $table->tinyInteger('verseNum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('words');
    }
};
