<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Produit extends Model
{
    protected $table = 'Type_Produit';
    protected $primaryKey = 'type_produit_id';
    public $timestamps = true;

    public $fillable = [
        'nom'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function produit()
    {
        return $this->hasMany('App\Produit');
    }
}
