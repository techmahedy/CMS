<?php

namespace App\Model\user;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

  
    protected $fillable = [
        'name', 'email', 'password', 'provider' , 'provider_id'
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];
}
