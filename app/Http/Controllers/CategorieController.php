<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07/11/2018
 * Time: 23:11
 */

namespace App\Http\Controllers;

use App\Http\Repository\CategorieRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategorieController extends Controller
{
    protected $categorieRepository;

    function __construct(CategorieRepository $categorieRepository)
    {
        $this->categorieRepository = $categorieRepository;
    }
    public function addPost(Request $request)
    {
        Log::info($request);
        $categorie = $this->categorieRepository->add($request);
        Log::info($categorie);
        return redirect('admin');
    }

    public function getAllCategories()
    {
        $categories = $this->categorieRepository->getAll();
        Log::info($categories);
        return view('admin/listecat')->with('categories',$categories);
    }

    public function editGet($categorieId)
    {
        if (!$categorie=$this->categorieRepository->getById($categorieId)) {
            return response()->json(['error' => 'categorie not found'], 404);
        }

        return view('admin/editcat')->with('categorie',$categorie);
}

    public function editPost(Request $request)
    {
        $categorie = $this->categorieRepository->edit($request);
        Log::info($categorie);
        return redirect('admin');
    }
}
