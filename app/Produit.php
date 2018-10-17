<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'Produit';
    protected $primaryKey = 'produit_id';
    public $timestamps = true;

    public $fillable = [
        'nom',
        'description',
        'prix',
        'points',
        'categorie_id',
        'type_produit_id'/*,
        'image_produit_id'*/
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function typeProduit()
    {
        return $this->hasOne('App\Type_Produit','type_produit_id','type_produit_id');
    }

    public function categorie()
    {
        return $this->hasOne('App\Categorie','categorie_id','categorie_id');
    }

    public function imageProduit()
    {
        return $this->hasOne('App\Image_Produit','image_produit_id','image_produit_id');
    }

    public function produitCommande()
    {
        return $this->hasMany('App\Produit_Commande');
    }
}
