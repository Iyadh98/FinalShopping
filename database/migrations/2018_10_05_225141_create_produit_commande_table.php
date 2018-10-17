<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produit_Commande', function (Blueprint $table) {
            $table->increments('produit_commande_id');
            $table->integer('quantite');

            $table->integer('produit_id')->unsigned();
            $table->foreign('produit_id')
                ->references('produit_id')
                ->on('Produit')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('commande_id')->unsigned();
            $table->foreign('commande_id')
                ->references('commande_id')
                ->on('Commande')
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
        Schema::dropIfExists('produit_commande');
    }
}
