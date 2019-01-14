<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25/11/2018
 * Time: 15:51
 */

namespace App\Http\Repository;
use App\Image_Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImagesRepository
{
function add(Request $request){

    $image=new Image_Produit();
    $image->Desc1image1Caroussel=$request->input('Desc1image1Caroussel');
    $image->Desc2image1Caroussel=$request->input('Desc2image1Caroussel');
    $imageName1= 'imageIndex'.rand(). '.' .
        $request->file('image1Caroussel')->getClientOriginalExtension();
    $request->file('image1Caroussel')->move(
        base_path() . '/public/images/produits', $imageName1
    );
    $image->image1Caroussel=$imageName1;

    $image->Desc1image2Caroussel=$request->input('Desc1image2Caroussel');
    $image->Desc2image2Caroussel=$request->input('Desc2image2Caroussel');
    $imageName2= 'imageIndex'.rand(). '.' .
        $request->file('image2Caroussel')->getClientOriginalExtension();
    $request->file('image2Caroussel')->move(
        base_path() . '/public/images/produits', $imageName2
    );
    $image->image2Caroussel=$imageName2;
    $image->Desc1image3Caroussel=$request->input('Desc1image3Caroussel');
    $image->Desc2image3Caroussel=$request->input('Desc2image3Caroussel');
    $imageName3= 'imageIndex'.rand(). '.' .
        $request->file('image3Caroussel')->getClientOriginalExtension();
    $request->file('image3Caroussel')->move(
        base_path() . '/public/images/produits', $imageName3
    );
    $image->image3Caroussel=$imageName3;

    $imageName4= 'imageIndexbr'.rand(). '.' .
        $request->file('image1')->getClientOriginalExtension();
    $request->file('image1')->move(
        base_path() . '/public/images/produits', $imageName4
    );
    $image->image1=$imageName4;
    $image->descImage1=$request->input('descImage1');

    $imageName5= 'imageIndex'.rand(). '.' .
        $request->file('image2')->getClientOriginalExtension();
    $request->file('image2')->move(
        base_path() . '/public/images/produits', $imageName5
    );
    $image->image2=$imageName5;
    $image->descImage2=$request->input('descImage2');

    $imageName6= 'imageIndex'.rand(). '.' .
        $request->file('image3')->getClientOriginalExtension();
    $request->file('image3')->move(
        base_path() . '/public/images/produits', $imageName6
    );
    $image->image3=$imageName6;
    $image->descImage3=$request->input('descImage3');

    $imageName7= 'imageIndex'.rand(). '.' .
        $request->file('image4')->getClientOriginalExtension();
    $request->file('image4')->move(
        base_path() . '/public/images/produits', $imageName7
    );
    $image->image4=$imageName7;
    $image->descImage4=$request->input('descImage4');

    $imageName8= 'imageIndex'.rand(). '.' .
        $request->file('image5')->getClientOriginalExtension();
    $request->file('image5')->move(
        base_path() . '/public/images/produits', $imageName8
    );
    $image->image5=$imageName8;
    $image->descImage5=$request->input('descImage5');

    $imageName9= 'imageIndex'.rand(). '.' .
        $request->file('image6')->getClientOriginalExtension();
    $request->file('image6')->move(
        base_path() . '/public/images/produits', $imageName9
    );
    $image->image6=$imageName9;
    $image->descImage6=$request->input('descImage6');

   /* $imageName10= 'imageIndex'.rand(). '.' .
        $request->file('image7')->getClientOriginalExtension();
    $request->file('image7')->move(
        base_path() . '/public/images/produits', $imageName10
    );
    $image->image7=$imageName10;
    $image->descImage7=$request->input('descImage7');

    $imageName11= 'imageIndex'.rand(). '.' .
        $request->file('image8')->getClientOriginalExtension();
    $request->file('image8')->move(
        base_path() . '/public/images/produits', $imageName11
    );
    $image->image8=$imageName11;
    $image->descImage8=$request->input('descImage8');

    $imageName12= 'imageIndex'.rand(). '.' .
        $request->file('image9')->getClientOriginalExtension();
    $request->file('image9')->move(
        base_path() . '/public/images/produits', $imageName12
    );
    $image->image9=$imageName12;
    $image->descImage9=$request->input('descImage9');


    $imageName13= 'imageIndex'.rand(). '.' .
        $request->file('image10')->getClientOriginalExtension();
    $request->file('image10')->move(
        base_path() . '/public/images/produits', $imageName13
    );
    $image->image10=$imageName13;
    $image->descImage10=$request->input('descImage10');
*/

    $imageName14= 'imageIndex'.rand(). '.' .
        $request->file('image11')->getClientOriginalExtension();
    $request->file('image11')->move(
        base_path() . '/public/images/produits', $imageName14
    );
    $image->image11=$imageName14;
    $image->descImage11=$request->input('descImage11');


    $imageName15= 'imageIndex'.rand(). '.' .
        $request->file('image12')->getClientOriginalExtension();
    $request->file('image12')->move(
        base_path() . '/public/images/produits', $imageName15
    );
    $image->image12=$imageName15;
    $image->descImage12=$request->input('descImage12');


    $imageName16= 'imageIndex'.rand(). '.' .
        $request->file('image13')->getClientOriginalExtension();
    $request->file('image13')->move(
        base_path() . '/public/images/produits', $imageName16
    );
    $image->image13=$imageName16;
    $image->descImage13=$request->input('descImage13');


    $imageName17= 'imageIndex'.rand(). '.' .
        $request->file('image14')->getClientOriginalExtension();
    $request->file('image14')->move(
        base_path() . '/public/images/produits', $imageName17
    );
    $image->image14=$imageName17;
    $image->descImage14=$request->input('descImage14');


    $imageName18= 'imageIndex'.rand(). '.' .
        $request->file('image15')->getClientOriginalExtension();
    $request->file('image15')->move(
        base_path() . '/public/images/produits', $imageName18
    );
    $image->image15=$imageName18;
    $image->descImage15=$request->input('descImage15');


    $imageName19= 'imageIndex'.rand(). '.' .
        $request->file('image16')->getClientOriginalExtension();
    $request->file('image16')->move(
        base_path() . '/public/images/produits', $imageName19
    );
    $image->image16=$imageName19;
    $image->descImage16=$request->input('descImage16');


    $imageName20= 'imageIndex'.rand(). '.' .
        $request->file('image17')->getClientOriginalExtension();
    $request->file('image17')->move(
        base_path() . '/public/images/produits', $imageName20
    );
    $image->image17=$imageName20;
    $image->descImage17=$request->input('descImage17');
    $image->save();
    return $image;
}
    public function getAll()
    {
        return Image_Produit::all();
    }
    public function getById($imageId)
    {
        return Image_Produit::find($imageId);
    }
    public function edit(Request $request){
    $image=$this->getById($request->input('id'));
    Log::info("This is the id:");
    Log::info($image);
        $image->Desc1image1Caroussel=$request->input('Desc1image1Caroussel');
        $image->Desc2image1Caroussel=$request->input('Desc2image1Caroussel');
        $imageName1= 'imageIndex'.rand(). '.' .
            $request->file('image1Caroussel')->getClientOriginalExtension();
        $request->file('image1Caroussel')->move(
            base_path() . '/public/images/produits', $imageName1
        );
        $image->image1Caroussel=$imageName1;

        $image->Desc1image2Caroussel=$request->input('Desc1image2Caroussel');
        $image->Desc2image2Caroussel=$request->input('Desc2image2Caroussel');
        $imageName2= 'imageIndex'.rand(). '.' .
            $request->file('image2Caroussel')->getClientOriginalExtension();
        $request->file('image2Caroussel')->move(
            base_path() . '/public/images/produits', $imageName2
        );
        $image->image2Caroussel=$imageName2;
        $image->Desc1image3Caroussel=$request->input('Desc1image3Caroussel');
        $image->Desc2image3Caroussel=$request->input('Desc2image3Caroussel');
        $imageName3= 'imageIndex'.rand(). '.' .
            $request->file('image3Caroussel')->getClientOriginalExtension();
        $request->file('image3Caroussel')->move(
            base_path() . '/public/images/produits', $imageName3
        );
        $image->image3Caroussel=$imageName3;

        $imageName4= 'imageIndexbr'.rand(). '.' .
            $request->file('image1')->getClientOriginalExtension();
        $request->file('image1')->move(
            base_path() . '/public/images/produits', $imageName4
        );
        $image->image1=$imageName4;
        $image->descImage1=$request->input('descImage1');

        $imageName5= 'imageIndex'.rand(). '.' .
            $request->file('image2')->getClientOriginalExtension();
        $request->file('image2')->move(
            base_path() . '/public/images/produits', $imageName5
        );
        $image->image2=$imageName5;
        $image->descImage2=$request->input('descImage2');

        $imageName6= 'imageIndex'.rand(). '.' .
            $request->file('image3')->getClientOriginalExtension();
        $request->file('image3')->move(
            base_path() . '/public/images/produits', $imageName6
        );
        $image->image3=$imageName6;
        $image->descImage3=$request->input('descImage3');

        $imageName7= 'imageIndex'.rand(). '.' .
            $request->file('image4')->getClientOriginalExtension();
        $request->file('image4')->move(
            base_path() . '/public/images/produits', $imageName7
        );
        $image->image4=$imageName7;
        $image->descImage4=$request->input('descImage4');

        $imageName8= 'imageIndex'.rand(). '.' .
            $request->file('image5')->getClientOriginalExtension();
        $request->file('image5')->move(
            base_path() . '/public/images/produits', $imageName8
        );
        $image->image5=$imageName8;
        $image->descImage5=$request->input('descImage5');

        $imageName9= 'imageIndex'.rand(). '.' .
            $request->file('image6')->getClientOriginalExtension();
        $request->file('image6')->move(
            base_path() . '/public/images/produits', $imageName9
        );
        $image->image6=$imageName9;
        $image->descImage6=$request->input('descImage6');

       /* $imageName10= 'imageIndex'.rand(). '.' .
            $request->file('image7')->getClientOriginalExtension();
        $request->file('image7')->move(
            base_path() . '/public/images/produits', $imageName10
        );
        $image->image7=$imageName10;
        $image->descImage7=$request->input('descImage7');

        $imageName11= 'imageIndex'.rand(). '.' .
            $request->file('image8')->getClientOriginalExtension();
        $request->file('image8')->move(
            base_path() . '/public/images/produits', $imageName11
        );
        $image->image8=$imageName11;
        $image->descImage8=$request->input('descImage8');

        $imageName12= 'imageIndex'.rand(). '.' .
            $request->file('image9')->getClientOriginalExtension();
        $request->file('image9')->move(
            base_path() . '/public/images/produits', $imageName12
        );
        $image->image9=$imageName12;
        $image->descImage9=$request->input('descImage9');


        $imageName13= 'imageIndex'.rand(). '.' .
            $request->file('image10')->getClientOriginalExtension();
        $request->file('image10')->move(
            base_path() . '/public/images/produits', $imageName13
        );
        $image->image10=$imageName13;
        $image->descImage10=$request->input('descImage10');
*/

        $imageName14= 'imageIndex'.rand(). '.' .
            $request->file('image11')->getClientOriginalExtension();
        $request->file('image11')->move(
            base_path() . '/public/images/produits', $imageName14
        );
        $image->image11=$imageName14;
        $image->descImage11=$request->input('descImage11');


        $imageName15= 'imageIndex'.rand(). '.' .
            $request->file('image12')->getClientOriginalExtension();
        $request->file('image12')->move(
            base_path() . '/public/images/produits', $imageName15
        );
        $image->image12=$imageName15;
        $image->descImage12=$request->input('descImage12');


        $imageName16= 'imageIndex'.rand(). '.' .
            $request->file('image13')->getClientOriginalExtension();
        $request->file('image13')->move(
            base_path() . '/public/images/produits', $imageName16
        );
        $image->image13=$imageName16;
        $image->descImage13=$request->input('descImage13');


        $imageName17= 'imageIndex'.rand(). '.' .
            $request->file('image14')->getClientOriginalExtension();
        $request->file('image14')->move(
            base_path() . '/public/images/produits', $imageName17
        );
        $image->image14=$imageName17;
        $image->descImage14=$request->input('descImage14');


        $imageName18= 'imageIndex'.rand(). '.' .
            $request->file('image15')->getClientOriginalExtension();
        $request->file('image15')->move(
            base_path() . '/public/images/produits', $imageName18
        );
        $image->image15=$imageName18;
        $image->descImage15=$request->input('descImage15');


        $imageName19= 'imageIndex'.rand(). '.' .
            $request->file('image16')->getClientOriginalExtension();
        $request->file('image16')->move(
            base_path() . '/public/images/produits', $imageName19
        );
        $image->image16=$imageName19;
        $image->descImage16=$request->input('descImage16');


        $imageName20= 'imageIndex'.rand(). '.' .
            $request->file('image17')->getClientOriginalExtension();
        $request->file('image17')->move(
            base_path() . '/public/images/produits', $imageName20
        );
        $image->image17=$imageName20;
        $image->descImage17=$request->input('descImage17');
        $image->update();
        $image = $this->getById($image->id_table);
        return $image;
    }

}