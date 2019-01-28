<?php
/**
 * Created by IntelliJ IDEA.
 * Categorie: WIN8
 * Date: 07/10/2018
 * Time: 22:25
 */

namespace App\Http\Repository;


use App\Sous_Categorie;
use Illuminate\Http\Request;

class SousCategorieRepository
{

    public function add(Request $request)
    {
        $sousCategorie = new Sous_Categorie();
        $sousCategorie->nom = $request->input('nom');
        $sousCategorie->categorie_id = $request->input('categorie');

        $sousCategorie->save();
        return $sousCategorie;
    }

    public function getAll()
    {
        return Sous_Categorie::all();
    }



    public function getById($sousCategorieId)
    {
        return Sous_Categorie::find($sousCategorieId);
    }

    public function delete($sousCategorie){
        $sousCategorie->delete();
    }

    public function edit(Request $request)
    {
        $sousCategorie = $this->getById($request->input('id'));
        $sousCategorie->nom = $request->input('nom');
        $sousCategorie->categorie_id = $request->input('categorie');


        $sousCategorie->update();

        $sousCategorie = $this->getById($sousCategorie->sous_categorie_id);
        return $sousCategorie;
    }

}
