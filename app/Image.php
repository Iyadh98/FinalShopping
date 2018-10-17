<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'Image';
    protected $primaryKey = 'image_id';
    public $timestamps = true;

    public $fillable = [
        'nom',
        'path'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}
