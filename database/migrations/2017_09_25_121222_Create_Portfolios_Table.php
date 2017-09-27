<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->references('id')->on('Members');
            $table->integer('scheme_id');
            $table->integer('starting_class_id');
            $table->integer('stage_id');
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
        Schema::dropIfExists('Portfolios');
    }
}
