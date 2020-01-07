<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smells', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id', false, true);
            $table->string('name', 30);
            $table->string('slug', 10)->unique();
            $table->text('description');
            $table->string('big_icon');
            $table->string('small_icon');
            $table->timestamps();
        });

        Schema::table('smells', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('smell_categories');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smells');
    }
}
