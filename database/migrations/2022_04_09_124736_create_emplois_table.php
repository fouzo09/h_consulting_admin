<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplois', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('domaine_id', 255);
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('entreprise_id');
            $table->string('ville_id', 255);
            $table->unsignedInteger('grade_id');
            $table->string('secteur_id', 255);
            $table->string('titre', 255);
            $table->text('contenu');
            $table->date('date_publication');
            $table->string('image', 255);
            $table->integer('experience');
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
        Schema::dropIfExists('emplois');
    }
}
