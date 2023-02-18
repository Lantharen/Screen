<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Offer extends Model
{
    use HasFactory;
    use AsSource;
    use Attachable;
    use Filterable;

    protected $fillable = [
        'name',
        'description',
        'min_price',
        'max_price',
        'min_percent',
        'max_percent',
        'duration_in_seconds'
    ];

    protected $casts = [
        'min_price' => 'decimal:2',
        'max_price' => 'decimal:2',
        'min_percent' => 'decimal:2',
        'max_percent' => 'decimal:2',
        'duration_in_seconds' => 'integer',
    ];



    protected $allowedSorts = [
        'duration_in_seconds',
        'min_price',
        'min_percent',
        'description'
    ];

    /**
     * Get attributes for the offer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function offerAttributes()
    {
        return $this->hasMany(OfferAttribute::class);
    }


}
