<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSousCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SousCategorie', function (Blueprint $table) {
            $table->increments('sous_categorie_id');
            $table->String('nom');
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')
                ->references('categorie_id')
                ->on('Categorie')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SousCategorie');
    }
}
