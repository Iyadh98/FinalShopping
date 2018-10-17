<?php
/**
 * Created by IntelliJ IDEA.
 * Categorie: WIN8
 * Date: 07/10/2018
 * Time: 22:25
 */

namespace App\Http\Repository;


use App\Categorie;
use Illuminate\Http\Request;

class CategorieRepository
{

    public function add(Request $request)
    {
        $categorie = new Categorie();
        $categorie->nom = $request->input('nom');

        $categorie->save();
        return $categorie;
    }

    public function getAll()
    {
        return Categorie::all();
    }

    public function getById($categorieId)
    {
        return Categorie::find($categorieId);
    }

    public function delete($categorie){
        $categorie->delete();
    }

    public function edit($categorie,  Request $request)
    {
        $categorie->nom = $request->input('nom');

        $categorie->update();

        $categorie = $this->getById($categorie->categorie_id);
        return $categorie;
    }

}
