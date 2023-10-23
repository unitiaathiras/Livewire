<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_table extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'fabric_type',
        'quantity',
        'price',
        'measurement'
    ];
}
