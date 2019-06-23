<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'name','label'
    ];
    

    /**
     * @return Object of permissiobs associated with current role
     */
    public function permissions()
    {
    	return $this->belongsToMany(Permission::class);
    }

    /**
     * @param  Permission object 
     * @return Assign given permission to current role
     */
    public function givePermissionTo($permission)
    {
    	return $this->permissions()->save($permission);
    }


     public function getCreatedBy(){
      if($this->created_by>0){
          $user=Admin::where('id',$this->created_by)->withTrashed()->first();
          return $user->name;
      }else{
        return "Super Admin";
      }

    }

}
