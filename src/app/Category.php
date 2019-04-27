<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

use App\CategoryProductTrans;
use Spatie\EloquentSortable\SortableTrait;


class Category extends Model
{
    use NodeTrait;
    use SortableTrait;

    protected $table = 'categories';

    public $sortable = [
        'order_column_name' => 'orderable',
        'sort_when_creating' => true,
    ];

    public $fillable = [
        'slug',
        'category_name',
        'category_description',
        'image',
        'status',
        'parent_id',
        'meta_title',
        'meta_description',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'category_name'
            ]
        ];
    }

    public function getUrl(){
        return route('category.product', [
            'id' => $this->id,
            'slug' => $this->slug
        ]);
    }

    public function getImage(){
        if( $this->image == '' ){
            return url('admin/dist/img/default-50x50.gif');
        }
        return $this->image;
    }

    public function products(){
        return $this->belongsToMany( Product::class);
    }



}
