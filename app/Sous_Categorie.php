<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sous_Categorie extends Model
{
    protected $table = 'Sous_Categorie';
    protected $primaryKey = 'sous_categorie_id';
    public $timestamps = true;

    public $fillable = [
        'nom'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function produit()
    {
        return $this->hasMany('App\Produit');
    }

    public function categorie()
    {
        return $this->belongsTo('App\Categorie','categorie_id','categorie_id');
    }
}
