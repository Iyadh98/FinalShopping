<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 07/10/2018
 * Time: 22:47
 */

namespace App\Http\Repository;


use App\Commande;
use App\Produit_Commande;
use Illuminate\Http\Request;

class CommandeRepository
{

    public function add($date,$montant, $adresse,$codePostal, $userId, $produits)
{
    $commande = new Commande();
    $commande->date = $date;
    $commande->montant = $montant;
    $commande->adresse= $adresse;
    $commande->code_postal= $codePostal;
    $commande->users_id = $userId;
    $commande->etat = 1;

    $commande->save();
    $points = 0;

        foreach($produits as $produit){
            $produitCommande = new Produit_Commande();
            $produitCommande->commande_id = $commande->commande_id;
            $produitCommande->produit_id = $produit->id;
            $produitCommande->quantite = $produit->quantity;
            $produitCommande->save();

        }
        return $commande;
    }

        public function getAll()
        {
            return Commande::all();

        }

    public function getCommandesEncoursPreteWithUsers()
    {
        return Commande::where('etat','=',1)
            ->orWhere('etat','=',2)
            ->with(['user','produitCommande'])
            ->get();
    }

    public function getCommandesAnnuleesWithUsers()
    {
        return Commande::where('etat','=',0)
            ->with(['user','produitCommande'])
            ->get();
    }

    public function getCommandesLivreesWithUsers()
    {
        return Commande::where('etat','=',3)
            ->with(['user','produitCommande'])
            ->get();
    }

        public function getAllWithUsers()
        {
            return Commande::with(['user'])
                ->get();
        }

        public function getById($commandeId)
        {
            return Commande::find($commandeId);
        }

        public function delete($commande){
            $commande->delete();
        }

    /*
     * etat enCours: 1;
     * etat Prete: 2;
     * etat Livree: 3
     * etat Annulee: 0
     *
     */

    public function changerEtatEnCours($commande)
    {
        $commande->etat = 1;
        $commande->update();

        $commande = $this->getById($commande->commande_id);
        return $commande;
    }

    public function changerEtatPrete($commande)
    {
        $commande->etat = 2;
        $commande->update();

        $commande = $this->getById($commande->commande_id);
        return $commande;
    }

    public function changerEtatLivree($commande)
    {
        $commande->etat = 3;
        $commande->update();

        $commande = $this->getById($commande->commande_id);
        return $commande;
    }

    public function changerEtatAnnulee($commande)
    {
        $commande->etat = 0;
        $commande->update();

        $commande = $this->getById($commande->commande_id);
        return $commande;
    }
}
