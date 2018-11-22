<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 07/10/2018
 * Time: 22:17
 */

namespace App\Http\Repository;



use App\Produit;
use Illuminate\Http\Request;

class ProduitRepository
{

    public function add(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->input('nom');
        $produit->description = $request->input('description');
        $produit->prix = $request->input('prix');
        $produit->points = $request->input('points');
        $produit->categorie_id = $request->input('categorie');
        $produit->type_produit_id = $request->input('type');
        $imageName = $produit->nom .rand(). '.' .
            $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(
            base_path() . '/public/images/produits', $imageName
        );
        $produit->image=$imageName;
        $produit->save();

        return $produit;
    }

    public function getAll()
    {
        return Produit::all();
    }

    public function getAllWithCategoriesTypes()
    {
        return Produit::with(['categorie','type'])->get();
    }


    public function getById($produitId)
    {
        return Produit::find($produitId);
    }

    public function delete($produit){
        $produit->delete();
    }


    public function edit(Request $request)
    {
        $produit = $this->getById($request->input('id'));
        $produit->nom = $request->input('nom');
        $produit->description = $request->input('description');
        $produit->prix = $request->input('prix');
        $produit->points = $request->input('points');
        $produit->categorie_id = $request->input('categorie');
        $produit->type_produit_id = $request->input('type');
        $produit->update();

        $produit = $this->getById($produit->produit_id);
        return $produit;
    }

    public function getProduitsByCategorie($categorieId){
        return null;

    }
}
