<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negociations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name")->nullable(false);
            $table->dateTime('started_at');
            $table->dateTime('stopped_at');
            $table->boolean("completed")->default(false);
            $table->unsignedBigInteger('artwork_id');
            $table->timestamps();
            $table->foreign('artwork_id')->references('id')->on('artworks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('negociations');
    }
}
