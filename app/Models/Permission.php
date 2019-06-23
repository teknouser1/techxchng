<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name', 'label', 'group',
    ];

    /*
    * get all roles belongs to permission.
    *
    * @array collections
    */
  
    public function roles()
    {
       return $this->belongsToMany(Role::class);
    }
}
