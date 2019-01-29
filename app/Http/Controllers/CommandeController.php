<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 17/11/2018
 * Time: 11:06
 */

namespace App\Http\Controllers;

use App\Http\Repository\CommandeRepository;
use App\Http\Repository\ProduitCommandeRepository;
use App\Http\Repository\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Lenius\Basket\Facades\Basket;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailCommandePassee;


class CommandeController
{
    protected $commandeRepository;
    protected $userRepository;
    protected $produitCommandeRepository;

    function __construct(CommandeRepository $commandeRepository,
                         ProduitCommandeRepository $produitCommandeRepository,
                         UserRepository $userRepository)
    {
        $this->commandeRepository = $commandeRepository;
        $this->produitCommandeRepository = $produitCommandeRepository;
        $this->userRepository = $userRepository;
    }

    public function addPost(Request $request)
    {
        Log::info("request checkout");
        Log::info($request);
        $date = date("Y-m-d");
        $total = Basket::total(false);
        $adresse = $request->input('adresse');
        $codePostal = $request->input('codePostal');
        $user = Auth::user();
        $contenu = Basket::contents();

        $commande = $this->commandeRepository->add($date, $total, $adresse, $codePostal, $user->id, $contenu);
        Mail::to($user->email)->send(new SendMailCommandePassee($date, $total, $adresse, $codePostal, $user, $contenu));

        Log::info("basket1");
        Log::info(Basket::contents());
        Log::info("basket2");
        Log::info(Basket::contents(true));
        Basket::destroy();
        return redirect('/index');
    }

    public function addGet()
    {
        $commandes = $this->commandeRepository->getAll();
        return view('/checkout')->with('commandes', $commandes);
    }

    public function getAll()
    {
        $commandes = $this->commandeRepository->getAll();
        return view('profile')->with('commandes', $commandes);
    }

    public function getAllCommandesWithUsers()
    {
        $commandes = $this->commandeRepository->getAllWithUsers();
        Log::info($commandes);
        return view('/admin/listecom')->with('commandes', $commandes);
    }

    public function getCommandesEncoursPreteWithUsers()
    {
        $commandes = $this->commandeRepository->getCommandesEncoursPreteWithUsers();
        Log::info($commandes);
        return view('/admin/listecom')->with('commandes', $commandes);
    }

    public function getCommandesAnnuleesWithUsers()
    {
        $commandes = $this->commandeRepository->getCommandesAnnuleesWithUsers();
        Log::info($commandes);
        return view('/admin/listecomAnn')->with('commandes', $commandes);
    }

    public function getCommandesLivreesWithUsers()
    {
        $commandes = $this->commandeRepository->getCommandesLivreesWithUsers();
        Log::info($commandes);
        return view('/admin/listecomLiv')->with('commandes', $commandes);
    }

    public function changerEtatPrete($commandeId)
    {
        if ($commande = $this->commandeRepository->getById($commandeId)) {
            $this->commandeRepository->changerEtatPrete($commande);
        }
        return redirect('/admin/lister_commandes');
    }

    public function changerEtatLivree($commandeId)
    {
        if ($commande = $this->commandeRepository->getById($commandeId)) {
            $this->commandeRepository->changerEtatLivree($commande);
            $commande2 = $this->commandeRepository->getByIdWithUserAndProduitCommande($commandeId);
            Log::info($commande2);
            $totalPoints = $this->commandeRepository->getTotalPoints($commande2->produitCommandes);
            $this->userRepository->addPoints($commande2->user, $totalPoints);
        }
        return redirect('/admin/lister_commandes');
    }
}
