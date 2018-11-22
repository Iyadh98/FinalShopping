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
        Log::info("Holaa");
        Log::info($request);
        $categorie = $this->categorieRepository->add($request);
        Log::info($categorie);
        return redirect('admin');
    }

}