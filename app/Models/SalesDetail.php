<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $filalble = [
        'price',
        'quantity',
        'product_id',
        'sale_id'
    ];
}
