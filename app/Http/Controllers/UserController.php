<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 07/10/2018
 * Time: 22:15
 */

namespace App\Http\Controllers;


use App\Http\Repository\SousCategorieRepository;
use App\Http\Repository\UserRepository;
use Illuminate\Http\Request;


class UserController extends Controller
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function add(Request $request)
    {
        $user = $this->userRepository->add($request);
        return view('');
    }

    public function getAll()
    {
        $users = $this->userRepository->getAll();
        return view('admin/dataclient')->with('users',$users);
    }

    public function getById($userId)
    {
        if (!$user = $this->userRepository->getById($userId)) {
            return response()->json(['error' => 'user not found'], 404);
        }
        return ($user);
    }

    public function delete($userId)
    {
        if (!$user = $this->userRepository->getById($userId)) {
            return response()->json(['error' => 'user not found'], 404);
        }
        $this->userRepository->delete($user);
    }

    public function edit($userId, Request $request)
    {
        if (!$user = $this->userRepository->getById($userId)) {
            return response()->json(['error' => 'user not found'], 404);
        }
        if (!$user = $this->userRepository->edit($user, $request))
            return response()->json(['error' => 'can\'t edit'], 401);
        return redirect('/profil');
    }
    public function isAdm(){
        if(\Illuminate\Support\Facades\Auth::user() && \Illuminate\Support\Facades\Auth::user()->isAdministrator())
            return view('admin/index');
        else
            return "You have no access";
    }
}
