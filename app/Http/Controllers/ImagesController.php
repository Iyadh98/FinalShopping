<?php

namespace App\Http\Controllers;

use App\Http\Repository\CategorieRepository;
use App\Http\Repository\ImagesRepository;
use App\Http\Repository\ProduitRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImagesController extends Controller
{    protected $imagesRepository;
    protected $produitRepository;
    protected $categorieRepository;

    function __construct(ImagesRepository $imagesRepository,ProduitRepository $produitRepository,CategorieRepository $categorieRepository)
    {
        $this->imagesRepository = $imagesRepository;
        $this->produitRepository = $produitRepository;
        $this->categorieRepository = $categorieRepository;
    }
    public function add(Request $request)
    {
        $image = $this->imagesRepository->add($request);
        return redirect('/admin');
    }
    public function getAll(){
        $images=$this->imagesRepository->getAll();
        return view('index')->with('images',$images);
    }
    public function editGet($imageId)
    {
        if (!$image=$this->imagesRepository->getById($imageId)) {
            return response()->json(['error' => 'index not found'], 404);
        }
        return view('admin/imagesIndex')->with('image',$image);
    }
    public function editPost(Request $request)
    {
        $images = $this->imagesRepository->edit($request);
        Log::info($images);
        return redirect('admin');
    }
    public function getAllProd(){
        $images=$this->imagesRepository->getAll();
        $produits = $this->produitRepository->getAllWithSousCategoriesTypes();
        $categories = $this->categorieRepository->getAllWithSousCategories();
        log::info($categories);
        return view('product')->with('images',$images)->with('produits', $produits)->with('categories', $categories);
    }
}
