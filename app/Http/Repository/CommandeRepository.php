<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 07/10/2018
 * Time: 22:47
 */

namespace App\Http\Repository;


use App\Commande;
use Illuminate\Http\Request;

class CommandeRepository
{

    public function add(Request $request)
{
    $commande = new Commande();
    $commande->date = "23";
    $commande->montant = $request->input('montant');
    $commande->adresse=$request->input('adresse');
    $commande->users_id = $request->input('users_id');
    $commande->etat = 1;

    $commande->save();
    return $commande;
}

    public function getAll()
    {
        return Commande::all();
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
