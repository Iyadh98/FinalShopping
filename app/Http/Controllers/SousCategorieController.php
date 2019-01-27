<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07/11/2018
 * Time: 23:11
 */

namespace App\Http\Controllers;

use App\Sous_Categorie;
use App\Http\Repository\SousCategorieRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SousCategorieController extends Controller
{
    protected $sousCategorieRepository;

    function __construct(SousCategorieRepository $sousCategorieRepository)
    {
        $this->sousCategorieRepository = $sousCategorieRepository;
    }
    public function addPost(Request $request)
    {
        Log::info("Holaa");
        Log::info($request);
        $sousCategorie = $this->sousCategorieRepository->add($request);
        Log::info($sousCategorie);
        return redirect('admin');
    }

    public function getAllSousCategories()
    {
        $sousCategories = $this->sousCategorieRepository->getAll();
        Log::info($sousCategories);
        return view('admin/listecat')->with('sousCategories',$sousCategories);
    }




    public function editGet($sousCategorieId)
    {
        if (!$sousCategorie=$this->sousCategorieRepository->getById($sousCategorieId)) {
            return response()->json(['error' => 'sousCategorie not found'], 404);
        }
        return view('admin/editcat')->with('sousCategorie',$sousCategorie);
}

    public function editPost(Request $request)
    {
        $sousCategorie = $this->sousCategorieRepository->edit($request);
        Log::info($sousCategorie);
        return redirect('admin');
    }

    public function delete(/*$sousCategorieId*/$id){
       /* if (!$sousCategorie=$this->sousCategorieRepository->getById($sousCategorieId)) {
            return response()->json(['error' => 'sous categorie not found'], 404);
        }
        $this->sousCategorieRepository->delete($sousCategorie);
       */
        Sous_Categorie::where('sous_categorie_id', $id)->delete();
        return redirect('admin');
    }
}
