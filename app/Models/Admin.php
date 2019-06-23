<?php

namespace App\Models;
use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\HasRoles;
class Admin extends Authenticatable
{

	use Notifiable,SoftDeletes,HasRoles;

    protected $guard = 'admin';
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'name', 'email','password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }
    
}

