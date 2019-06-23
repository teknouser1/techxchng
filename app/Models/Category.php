<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
class Category extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function childs() {
        return $this->hasMany(Category::class,'parent_id','id');
    }

    public function getParentName(){
        if($this->parent_id>0){
            return $this->where('id',$this->parent_id)->first()->name;    
        }
        return "---";
        
    }

    public function getImgUrl(){
        if(!empty($this->image)){
            $exists = Storage::exists('uploads/category/'.$this->image);
            if($exists){
                return Storage::url('uploads/category/'.$this->image);
            }    
        }
        return '';
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function keywords(){
        return $this->belongsToMany(Keyword::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

}
