<?php

namespace App\Models;

use App\Filters\Filterable;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public $status = [
        'waiting',
        'processing',
        'shipping',
        'cancel',
        'done',

    ];

    use Filterable;

    public function getStatus(){
        return $this->status;
    }



    //
    public function items(){
        return $this->hasMany( OrderItems::class, 'order_id' );
    }

    public function customer(){
        return $this->belongsTo( User::class, 'user_id' );
    }

    public function city(){
        return $this->belongsTo( Cities::class, 'matp','matp' )->first();
    }

    public function district(){
        return $this->belongsTo( District::class, 'maqh','maqh'  )->first();
    }
    public function getShippingAddress(){

        return $this->shipping_address.', '.$this->district()->name.', '.$this->city()->name;
    }

}
