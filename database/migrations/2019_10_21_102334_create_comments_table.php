<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('comment');
            $table->string('photo');
            $table->bigInteger('article_id')->unsigned();
            $table->foreign('article_id')->on('articles')->references('id')->onDelete('cascade')->onUpdate('cascade'); 
            // permet de déclarer sa clé étranger, indiquand à quelle table est lié celle-ci 
            // par ex l'album appartient à un utilisateur
            // Les onDelete et OnUpdate permettent de lier cette table à sa table parente,
            // de sorte que si celle-ci est update ou delete, alors cette table le sera aussi            
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
        Schema::dropIfExists('comments');
    }
}

