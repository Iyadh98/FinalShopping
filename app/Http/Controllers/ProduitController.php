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
use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    public function addGet(){
        $categories=$this->categorieRepository->getAll();
        $types=$this->typeRepository->getAll();
        Log::info($types);
        return view('admin/ajoutprod')->with('categories',$categories)->with('types',$types);
    }

    public function getAllProductsAndCategories()
    {
        $produits = $this->produitRepository->getAll();
        $categories = $this->categorieRepository->getAll();
        return view('product')->with('produits',$produits)->with('categories',$categories);
    }

    public function getAllProducts()
    {
        $produits = $this->produitRepository->getAllWithCategoriesTypes();
        Log::info($produits);
        return view('admin/listeprod')->with('produits',$produits);
    }

    public function getById($produitId)
    {
        if (!$produit = $this->produitRepository->getById($produitId)) {
            return response()->json(['error' => 'produit not found'], 404);
        }
        return ($produit);
    }

    public function delete($produitId)
    {            Log::info("delete produit");

        if (!$produit = $this->produitRepository->getById($produitId)) {
            return redirect('/admin/liste-produits')->with('error', 'produit indisponible');
        }
        Log::info($produit);
        $this->produitRepository->delete($produit);
    }


    public function editGet($produitId)
    {
        $categories=$this->categorieRepository->getAll();
        $types=$this->typeRepository->getAll();

        if (!$produit = $this->produitRepository->getById($produitId)) {
            return response()->json(['error' => 'produit not found'], 404);
        }

        return view('admin/editprod')->with('produit',$produit)->with('categories',$categories)->with('types',$types);
    }

    public function editPost(Request $request)
    {
        $produit = $this->produitRepository->edit($request);
        Log::info($produit);
        return redirect('admin');
    }

    public function destroy($produit_id)
    {

        if (!$produit = $this->produitRepository->getById($produit_id)) {
            return response()->json(['error' => 'product not found'], 404);
        }
        $this->produitRepository->delete($produit);

        return redirect('/admin/liste_produit')->with('success', 'Produit supprimé');


    }
}
