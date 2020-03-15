<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = 
    [
        'customer_id',
        'shipping_id',
        'order_total',
        'order_status'
    ];
}
