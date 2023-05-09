<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zipcode',
        'country',
        'shipping_method',
        'shipping_amount',
        'tax_amount', 
        'total',
        'payment_status',
        'status',
        'notes', 
    ]; 
}