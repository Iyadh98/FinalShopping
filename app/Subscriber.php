<?php
/**
 * Created by PhpStorm.
 * User: iyadh
 * Date: 2019-01-27
 * Time: 12:43
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'subscriber';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'email'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}