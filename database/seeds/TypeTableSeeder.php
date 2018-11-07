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
        $type1->nom='gold';
        $type1->save();
        $type2=new Type_Produit();
        $type2->nom='silver';
        $type2->save();
        $type3=new Type_Produit();
        $type3->nom='bronze';
        $type3->save();
    }
}
