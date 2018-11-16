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
use App\Http\Repository\TypeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Produit;
use Lenius\Basket\Basket;
class ProduitController extends Controller
{
    protected $produitRepository;
    protected $categorieRepository;
    protected $typeRepository;

    function __construct(ProduitRepository $produitRepository,
                         CategorieRepository $categorieRepository,
                         TypeRepository $typeRepository)
    {
        $this->produitRepository = $produitRepository;
        $this->categorieRepository = $categorieRepository;
        $this->typeRepository = $typeRepository;
    }

    public function addPost(Request $request)
    {
        Log::info($request);
        $produit = $this->produitRepository->add($request);
        Log::info($produit);
        return redirect('admin');
    }

    public function addGet()
    {
        $categories = $this->categorieRepository->getAll();
        $types = $this->typeRepository->getAll();
        Log::info($types);
        return view('admin/ajoutprod')->with('categories', $categories)->with('types', $types);
    }

    public function getAllProductsAndCategories()
    {
        $produits = $this->produitRepository->getAll();
        $categories = $this->categorieRepository->getAll();
        return view('product')->with('produits', $produits)->with('categories', $categories);
    }

    public function getAllProducts()
    {
        $produits = $this->produitRepository->getAllWithCategoriesTypes();
        Log::info($produits);
        return view('admin/listeprod')->with('produits', $produits);
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

    public function destroy($produit_id)
    {
        $produit = Produit::find($produit_id);

        $produit->delete();
        return redirect('/admin/liste_produit')->with('success', 'Post Removed');


    }
    public function addCart($produit_id,$nom_produit,$prix_produit){
        Log::info("Test0");
        \Lenius\Basket\Facades\Basket::insert(array(
            'id'       => $produit_id,
            'name'     => $nom_produit,
            'price'    => $prix_produit,
            'quantity' => 1,
            'tax'      => 0,
            'weight' => 0
        ));
    return redirect('/produits');
    }
    public function destroyCart(){
        \Lenius\Basket\Facades\Basket::destroy();
        return redirect('/produits');
    }
    public function updateCart(Request $request){
        foreach (\Lenius\Basket\Facades\Basket::contents() as $item) {
            $item->quantity = $request->input('numprod');
        }
        return redirect('/panier');
    }
}
