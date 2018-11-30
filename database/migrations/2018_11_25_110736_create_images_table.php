<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id_table');
            $table->String('Desc1image1Caroussel');
            $table->String('Desc2image1Caroussel');
            $table->String('image1Caroussel');
            $table->String('Desc1image2Caroussel');
            $table->String('Desc2image2Caroussel');
            $table->String('image2Caroussel');
            $table->String('Desc1image3Caroussel');
            $table->String('Desc2image3Caroussel');
            $table->String('image3Caroussel');
            $table->String('image1');
            $table->String('descImage1');
            $table->String('image2');
            $table->String('descImage2');
            $table->String('image3');
            $table->String('descImage3');
            $table->String('image4');
            $table->String('descImage4');
            $table->String('image5');
            $table->String('descImage5');
            $table->String('image6');
            $table->String('descImage6');
            $table->String('image7');
            $table->String('descImage7');
            $table->String('image8');
            $table->String('descImage8');
            $table->String('image9');
            $table->String('descImage9');
            $table->String('image10');
            $table->String('descImage10');
            $table->String('image11');
            $table->String('descImage11');
            $table->String('image12');
            $table->String('descImage12');
            $table->String('image13');
            $table->String('descImage13');
            $table->String('image14');
            $table->String('descImage14');
            $table->String('image15');
            $table->String('descImage15');
            $table->String('image16');
            $table->String('descImage16');
            $table->String('image17');
            $table->String('descImage17');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
