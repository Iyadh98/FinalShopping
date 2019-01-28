<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'Categorie';
    protected $primaryKey = 'categorie_id';
    public $timestamps = true;

    public $fillable = [
        'nom'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function SousCategories()
    {
        return $this->hasMany('App\Sous_Categorie','categorie_id');
    }
}
