<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Setting extends Model
{
    protected $fillable=['setting_name','setting_value','type'];

    public function getImgUrl(){
    	if(!empty($this->setting_value)){
    		if($this->type=='home'){
    			$exists = Storage::exists('uploads/images/'.$this->setting_value);
	            if($exists){
	                return Storage::url('uploads/images/'.$this->setting_value);
	            }	
    		}
                
        }
        return '';
    }
}
