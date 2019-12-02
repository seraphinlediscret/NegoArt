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
            $table->float('price',8 ,2)->nullable(false);
            $table->string('picture')->nullable(false);
            $table->float('width',8 ,2)->nullable(true);
            $table->float('height',8 ,2)->nullable(true);
            $table->float('weight',8 ,2)->nullable(true);
            $table->string('material(s)')->nullable(false);
            $table->string('theme')->nullable(false);
            $table->string('author')->nullable(false);
            $table->string('color(s)')->nullable(true);
            $table->mediumInteger('date')->nullable(true);
            $table->BigInteger('minimum_price')->nullable(true);
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
