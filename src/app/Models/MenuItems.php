<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\EloquentSortable\SortableTrait;

class MenuItems extends Model
{
    use NodeTrait;

    protected $fillable = [
        'id',
        'menu_order',

    ];

    protected $table = 'menu_items';


    public function getStatus(){
        if( $this->menu_status ){
            return '<span class="label label-success">'.trans('app.activate').'</span>';
        }
        return '<span class="label label-danger">'.trans('app.deactivate').'</span>';
    }

}
