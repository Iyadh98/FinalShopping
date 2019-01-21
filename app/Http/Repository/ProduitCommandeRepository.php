<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 07/10/2018
 * Time: 22:47
 */

namespace App\Http\Repository;


use App\Produit_Commande;

class ProduitCommandeRepository
{
    public function getAllProduitCommandeByCommandeWithproduit($commandeId){
        return Produit_Commande::where('commande_id','=',$commandeId)
            ->with(['produit'])
            ->get();
    }

}
