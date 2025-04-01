<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceOrderFactory> */
    use HasFactory;

    protected $fillable = [
        'number',
        'type',
        'description',
        'solution',
        'delivery_conditions',
        'start_date',
        'deliver_date',
    ];
}
