<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit_Commande extends Model
{
    protected $table = 'Produit_Commande';
    protected $primaryKey = 'produit_commande_id';
    public $timestamps = true;

    public $fillable = [
        'quantite',
        'commande_id',
        'produit_id'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function produit()
    {
        return $this->hasOne('App\Produit','produit_id','produit_id');
    }

    public function commande()
    {
        return $this->belongsTo('App\Commande','commande_id','commande_id');
    }
}
