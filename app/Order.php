<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'ordered_car',
        'pickup_date',
        'return_date',
        'phone',
        'email',
        'suggestions',
        'extras',
        'payment_type',
        'total_payed',
        'location',
        'additionals',
        'status'

    ];
}
