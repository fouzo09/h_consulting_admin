<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploiUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploi_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('Emploi_id');
            $table->unsignedInteger('User_id');
            $table->string('CV');
            $table->date('date_de_la_postulation');
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
        Schema::dropIfExists('emploi_users');
    }
}
