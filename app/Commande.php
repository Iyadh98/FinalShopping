<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'Commande';
    protected $primaryKey = 'commande_id';
    public $timestamps = true;

    public $fillable = [
        'date',
        'montant',
        'etat',
        'adresse',
        'code_postal',
        'users_id'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function produitCommande()
    {
        return $this->hasMany('App\Produit_Commande','produit_commande_id');
    }

    public function user()
    {
        return $this->hasOne('App\User','id','users_id');
    }






}
