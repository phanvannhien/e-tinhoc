<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $connection = 'mysql';
    protected $table = 'permissions';

    protected $fillable = [
        'name',
        'display_name',
        'description',
        'action_name',
        'uri',
        'action',
    ];


}
