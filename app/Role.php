<?php

namespace App;
use User;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string nom
 */
class Role extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
