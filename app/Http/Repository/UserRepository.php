<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 07/10/2018
 * Time: 22:25
 */

namespace App\Http\Repository;


use App\User;
use Illuminate\Http\Request;

class UserRepository
{

    public function add(Request $request)
    {
        $user = new User();
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->password = bcrypt($request->input('password'));
        $user->adresse = $request->input('adresse');
        $user->code_postal = $request->input('code_postal');
        $user->score = 0;

        $user->save();
        return $user;
    }

    public function getAll()
    {
        return User::all();
    }

    public function getById($userId)
    {
        return User::find($userId);
    }

    public function delete($user){
        $user->delete();
    }

    public function edit($user,  Request $request)
    {
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->password = bcrypt($request->input('password'));
        $user->adresse = $request->input('adresse');
        $user->code_postal = $request->input('code_postal');

        $user->update();

        $user = $this->getById($user->id);
        return $user;
    }
    public function calculScore(){

    }

}