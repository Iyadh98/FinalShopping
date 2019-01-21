<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 21/01/2019
 * Time: 16:11
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'Message';
    protected $primaryKey = 'id_message';
    public $timestamps = true;

    public $fillable = [
        'nom',
        'tel',
        'email',
        'texte'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

}