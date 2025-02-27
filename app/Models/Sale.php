<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $filalble = [
        'total',
        'items',
        'cash',
        'change',
        'status',
        'user_id'
    ];
}
