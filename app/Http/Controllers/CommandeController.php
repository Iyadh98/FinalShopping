<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 17/11/2018
 * Time: 11:06
 */

namespace App\Http\Controllers;
use App\Http\Repository\CommandeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class CommandeController
{
    protected $commandeRepository;

    function __construct(CommandeRepository $commandeRepository)
    {
        $this->commandeRepository = $commandeRepository;
    }

    public function addPost(Request $request)
    {
        Log::info($request);
        $commande = $this->commandeRepository->add($request);
        Log::info($commande);
        return redirect('/index');
    }
    public function addGet()
    {
        $commandes = $this->commandeRepository->getAll();
        return view('/checkout')->with('commandes', $commandes);
    }
    public function getAll()
    {
        $commande = $this->commandeRepository->getAll();
        return view('profile')->with('commande',$commande);
    }

}