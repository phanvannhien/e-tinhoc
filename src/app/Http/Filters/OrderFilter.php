<?php
namespace App\Http\Filters;

use Illuminate\Http\Request;
use App\Filters\QueryFilters;


class OrderFilter extends QueryFilters
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    public function status( $s ) {
        return $this->builder->where('status', $s );
    }

    public function user_id( $s ) {
        return $this->builder->where('user_id', $s );
    }

    public function shipping_email( $s ) {
        return $this->builder->where('shipping_email', 'LIKE', "%$s%");
    }

    public function shipping_full_name( $s ) {
        return $this->builder->where('shipping_full_name', 'LIKE', "%$s%");
    }

    public function shipping_phone( $s ) {
        return $this->builder->where('shipping_phone','LIKE', "%$s%");

    }

    public function created_at( $s ) {
        return $this->builder->where('created_at', '>=', $s);

    }


}