<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submessage extends Model
{
    protected $table = 'Submessage';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'message'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}
