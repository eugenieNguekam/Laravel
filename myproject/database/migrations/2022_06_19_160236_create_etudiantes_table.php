<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiantes', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->foreignId("classe_id")->constrained("classes");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraint();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("etudiants" , function(Blueprint $table){
            $table->dropForeign("classe_id");
        });
        Schema::dropIfExists('etudiantes');
    }
}
