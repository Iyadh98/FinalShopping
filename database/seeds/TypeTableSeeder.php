<?php

use Illuminate\Database\Seeder;
use App\Type_Produit;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     $type1=new Type_Produit();
        $type1->nom='produit';
        $type1->save();
        $type2=new Type_Produit();
        $type2->nom='cadeau';
        $type2->save();
    }
}
