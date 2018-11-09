<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produit', function (Blueprint $table) {

            $table->increments('produit_id');
            $table->String('nom');
            $table->String('description');
            $table->Integer('prix');
            $table->Integer('points');
            $table->String('image');
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')
                ->references('categorie_id')
                ->on('Categorie')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('type_produit_id')->unsigned();
            $table->foreign('type_produit_id')
                ->references('type_produit_id')
                ->on('Type_Produit')
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
        Schema::dropIfExists('Produit');
    }
}
