<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 07/10/2018
 * Time: 22:15
 */

namespace App\Http\Controllers;


use App\Http\Repository\CategorieRepository;
use App\Http\Repository\ProduitRepository;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    protected $produitRepository;
    protected $categorieRepository;

    function __construct(ProduitRepository $produitRepository,CategorieRepository $categorieRepository)
    {
        $this->produitRepository = $produitRepository;
        $this->categorieRepository = $categorieRepository;
    }

    public function add(Request $request)
    {
        $produit = $this->produitRepository->add($request);
        return view('');
    }

    public function getAllProductsAndCategories()
    {
        $produits = $this->produitRepository->getAll();
        $categories = $this->categorieRepository->getAll();
        return view('product')->with('produits',$produits)->with('categories',$categories);
    }

    public function getById($produitId)
    {
        if (!$produit = $this->produitRepository->getById($produitId)) {
            return response()->json(['error' => 'produit not found'], 404);
        }
        return ($produit);
    }

    public function delete($produitId)
    {
        if (!$produit = $this->produitRepository->getById($produitId)) {
            return response()->json(['error' => 'produit not found'], 404);
        }
        $this->produitRepository->delete($produit);
    }

    public function edit($produitId, Request $request)
    {
        if (!$produit = $this->produitRepository->getById($produitId)) {
            return response()->json(['error' => 'produit not found'], 404);
        }
        if (!$produit = $this->produitRepository->edit($produit, $request))
            return response()->json(['error' => 'can\'t edit'], 401);
        return ($produit);
    }
}
