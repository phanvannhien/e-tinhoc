<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeOption extends Model
{

    protected $table = 'attribute_options';
    public $fillable = [
        'attribute_id',
        'admin_name',
        'option_value',
        'sort_order'
    ];

}
