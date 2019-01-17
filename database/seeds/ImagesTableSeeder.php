<?php

use Illuminate\Database\Seeder;
use App\Image_Produit;
class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image=new Image_Produit();
        $image->Desc1image1Caroussel="Test";
        $image->Desc2image1Caroussel="Test";
        $image->image1Caroussel="Test";
        $image->Desc1image2Caroussel="Test";
        $image->Desc2image2Caroussel="Test";
        $image->image2Caroussel="Test";
        $image->Desc1image3Caroussel="Test";
        $image->Desc2image3Caroussel="Test";
        $image->image3Caroussel="Test";
        $image->image1="Test";
        $image->descImage1="Test";
        $image->image2="Test";
        $image->descImage2="Test";
        $image->image3="Test";
        $image->descImage3="Test";
        $image->image4="Test";
        $image->descImage4="Test";
        $image->image5="Test";
        $image->descImage5="Test";
        $image->image6="Test";
        $image->descImage6="Test";

        /* = 'imageIndex'.rand(). '.' .
             lientOriginalExtension();
         (
             base_path() . '/public/images/produits',
         );
         $image->image7=;
         $image->descImage7=

         = 'imageIndex'.rand(). '.' .
             lientOriginalExtension();
         (
             base_path() . '/public/images/produits',
         );
         $image->image8=;
         $image->descImage8=

         = 'imageIndex'.rand(). '.' .
             lientOriginalExtension();
         (
             base_path() . '/public/images/produits',
         );
         $image->image9=;
         $image->descImage9=


         = 'imageIndex'.rand(). '.' .
             ClientOriginalExtension();
         e(
             base_path() . '/public/images/produits',
         );
         $image->image10=;
         $image->descImage10=;
     */

        $image->image11="Test";
        $image->descImage11="Test";
        $image->image12="Test";
        $image->descImage12="Test";
        $image->image13="Test";
        $image->descImage13="Test";
        $image->image14="Test";
        $image->descImage14="Test";
        $image->image15="Test";
        $image->descImage15="Test";
        $image->image16="Test";
        $image->descImage16="Test";
        $image->image17="Test";
        $image->descImage17="Test";
        $image->save();
        //
    }
}
