<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artworks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name")->nullable(false);
            $table->boolean("archive")->default(false);
            $table->timestamps();
            $table->text('description')->nullable(false);
            $table->float('price',10 ,2)->nullable(false);
            $table->string('picture')->nullable(false);
            $table->string('width')->nullable(true);
            $table->string('height')->nullable(true);
            $table->string('weight')->nullable(true);
            $table->text('materials')->nullable(false);
            $table->string('theme')->nullable(false);
            $table->string('author')->nullable(false);
            $table->text('colors')->nullable(true);
            $table->mediumInteger('date')->nullable(true);
            $table->float('minimum_price',10 ,2)->nullable(true);
            $table->string('number_tours')->nullable(true);
            $table->integer('time')->nullable(true);
            $table->integer('test_rate')->nullable(true);
            $table->integer('number_test')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artworks');
    }
}
