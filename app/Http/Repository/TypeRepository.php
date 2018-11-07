<?php
/**
 * Created by IntelliJ IDEA.
 * Categorie: WIN8
 * Date: 07/10/2018
 * Time: 22:25
 */

namespace App\Http\Repository;


use App\Type_Produit;
use Illuminate\Http\Request;

class TypeRepository
{

    public function add(Request $request)
    {
        $type = new Type_Produit();
        $type->nom = $request->input('nom');

        $type->save();
        return $type;
    }

    public function getAll()
    {
        return Type_Produit::all();
    }

    public function getById($typeId)
    {
        return Type_Produit::find($typeId);
    }

    public function delete($type){
        $type->delete();
    }

    public function edit($type,  Request $request)
    {
        $type->nom = $request->input('nom');

        $type->update();

        $type = $this->getById($type->type_produit_id);
        return $type;
    }

}
