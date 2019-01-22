<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 07/10/2018
 * Time: 22:15
 */

namespace App\Http\Controllers;


use App\Produit;
use App\Http\Repository\SousCategorieRepository;
use App\Http\Repository\ImagesRepository;
use App\Http\Repository\ProduitRepository;
use App\Http\Repository\TypeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Lenius\Basket\Basket;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class ProduitController extends Controller
{
    protected $produitRepository;
    protected $sousCategorieRepository;
    protected $typeRepository;
    protected $imagesRepository;


    function __construct(ProduitRepository $produitRepository,
                         SousCategorieRepository $sousCategorieRepository,
                         TypeRepository $typeRepository, ImagesRepository $imagesRepository)
    {
        $this->produitRepository = $produitRepository;
        $this->sousCategorieRepository = $sousCategorieRepository;
        $this->typeRepository = $typeRepository;
        $this->imagesRepository=$imagesRepository;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addPost(Request $request)
    {
        Log::info($request);
        $produit = $this->produitRepository->add($request);
        Log::info($produit);
        return redirect('admin');
    }

    public function addGet()
    {
        $sousCategories = $this->sousCategorieRepository->getAll();
        $types = $this->typeRepository->getAll();
        Log::info($types);
        return view('admin/ajoutprod')->with('sousCategories', $sousCategories)->with('types', $types);
    }

    public function getAllProductsAndSousCategories()
    {
        $produits = $this->produitRepository->getAll();
        $sousCategories = $this->sousCategorieRepository->getAll();
        return view('product')->with('produits', $produits)->with('sousCategories', $sousCategories);
    }
    public function getAllProductsAndSousCategoriesApp()
    {
        $produits = $this->produitRepository->getAll();
        $sousCategories = $this->sousCategorieRepository->getAll();
        return view('layouts/app2')->with('sousCategories', $sousCategories);
    }


    public function getAllProducts()
    {
        $produits = $this->produitRepository->getAllWithSousCategoriesTypes();
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
    {       /*     Log::info("delete produit");

        if (!$produit = $this->produitRepository->getById($produitId)) {
            return redirect('/admin/liste-produits')->with('error', 'produit indisponible');
        }
        Log::info($produit);*/
        Produit::where('produit_id', $produitId)->delete();
        return redirect('admin');
    }


    public function editGet($produitId)
    {
        $sousCategories=$this->sousCategorieRepository->getAll();
        $types=$this->typeRepository->getAll();

        if (!$produit = $this->produitRepository->getById($produitId)) {
            return response()->json(['error' => 'produit not found'], 404);
        }

        return view('admin/editprod')->with('produit',$produit)->with('sousCategories',$sousCategories)->with('types',$types);
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
    public function addCart($produit_id,$nom_produit,$prix_produit){
        Log::info("TestWHAAAT");
        \Lenius\Basket\Facades\Basket::insert(array(
            'id'       => $produit_id,
            'name'     => $nom_produit,
            'price'    => $prix_produit,
            'quantity' => Input::get('quant'),
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
            $i=0;
            $prod=Input::get('numprod');
            foreach(\Lenius\Basket\Facades\Basket::contents() as $item){
                $item->quantity = $prod[$i];
                $i=$i+1;
            }

        return redirect('/panier');
    }

    public function search(){
        $q = Input::get ( 'search' );
        $sousCategories = $this->sousCategorieRepository->getAll();

        $user = \App\Produit::where ( 'nom', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $user ) > 0)
            return view ( 'test' )->withDetails ( $user )->withQuery ( $q )->with('sousCategories', $sousCategories);
        else
            return view ( 'test' )->withMessage ( 'No Details found. Try to search again !' )->with('sousCategories', $sousCategories)->withDetails ( $user );
    }


     public function searchSousCategorie(){
         $q = Input::get ( 'cat' );

         if(isset($q)){
             Log::info($q);
             $produits = $this->produitRepository->getAll();
             $sousCategories = $this->sousCategorieRepository->getAll();
             $images=$this->imagesRepository->getAll();
             $ba=\App\Sous_Categorie::where('nom',$q)->get();
             foreach($ba as $b){
                 $i=0;
                 Log::info($b);
                 foreach(json_decode($b) as $a){
                 Log::info($a);
                 $test=$a;
                 $i=$i+1;
                 if($i==1)
                     break;
                 }
             }
             $user = \App\Produit::where ( 'sous_categorie_id', $test)->get ();

             Log::info("YAAAT");
             return view ( 'test' )->withDetails ( $user )->withQuery ( $q )->with('sousCategories', $sousCategories);
         }
       /*  else{
             $i=0;
             foreach($q as $query){
                 if($query[$i])
                     break;
                 $i=$i+1;
             }
             Log::info($i);
         }

          $sousCategories = $this->sousCategorieRepository->getAll();

          $user = \App\Produit::where ( 'sous_categorie_id', 'LIKE', '%' . $q . '%' )->get ();
          if (count ( $user ) > 0)
              return view ( 'test' )->withDetails ( $user )->withQuery ( $q )->with('sousCategories', $sousCategories);
          else
              return view ( 'test' )->withMessage ( 'No Details found. Try to search again !' )->with('sousCategories', $sousCategories)->withDetails ( $user );
    */
       }
    public function getAllProductsCheckout()
    {
        $produits = $this->produitRepository->getAllWithCategoriesTypes();
        Log::info($produits);
        return view('checkout')->with('produits', $produits);
    }

    public function mail(){
        $name='Iyadh';
        Mail::to('iyadhkhalfallah@ieee.org')->send(new SendMailable($name));
        return 'Email was sent';
    }
}
