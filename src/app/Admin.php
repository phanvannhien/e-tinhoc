<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class Admin extends Authenticatable
{
    //

    use EntrustUserTrait;

    protected $guard = 'admin';
    protected $table = 'admins';

    protected $fillable = [
        'first_name', 'last_name', 'user_name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


}
