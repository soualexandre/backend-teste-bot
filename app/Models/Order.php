<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'client',
        'seller',
        'description',
        'budget_amount',
    ];

    use HasFactory;
}
