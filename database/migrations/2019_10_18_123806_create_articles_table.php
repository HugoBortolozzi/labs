<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('photo');
            $table->text('text1');
            $table->text('text2');
            $table->text('text3');
            $table->text('author_description');
            $table->string('author_photo');
            $table->string('validate');           
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('categorie_id')->unsigned();
            $table->foreign('categorie_id')->on('categories')->references('id')->onDelete('cascade')->onUpdate('cascade'); 
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
        Schema::dropIfExists('articles');
    }
}
