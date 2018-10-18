<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_Produit extends Model
{
    protected $table = 'Image_Produit';
    protected $primaryKey = 'image_produit_id';
    public $timestamps = true;

    public $fillable = [
        'nom',
        'path'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function produit()
    {
        return $this->belongsTo('App\Produit');
    }
}
