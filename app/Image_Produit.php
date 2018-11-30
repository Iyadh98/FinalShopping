<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_Produit extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'id_table';
    public $timestamps = false;

    public $fillable = [
        'Desc1image1Caroussel',
        'Desc2image1Caroussel',
        'image1Caroussel',
        'Desc1image2Caroussel',
        'Desc2image2Caroussel',
        'image2Caroussel',
        'Desc1image3Caroussel',
        'Desc2image3Caroussel',
        'image3Caroussel',
        'image1',
        'descImage1',
        'image1',
        'descImage1',
        'image2',
        'descImage2',
        'image3',
        'descImage3',
        'image4',
        'descImage5',
        'image6',
        'descImage6',
        'image7',
        'descImage7',
        'image8',
        'descImage8',
        'image9',
        'descImage9',
        'image10',
        'descImage10',
        'image11',
        'descImage11',
        'image12',
        'descImage12',
        'image13',
        'descImage13',
        'image14',
        'descImage14',
        'image15',
        'descImage15',
        'image16',
        'descImage16',
        'image17',
        'descImage17',
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

}
