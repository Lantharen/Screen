<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_id',
        'name',
        'type',
        'value',
    ];

    protected $casts = [
        'offer_id' => 'integer',
    ];
}
