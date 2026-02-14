<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';

    protected $fillable = [
        'barcode',
        'item_name',
        'category',
        'location',
        'stock',
        'minimum_stock',
        'unit',
        'condition',
        'description'
    ];
}
