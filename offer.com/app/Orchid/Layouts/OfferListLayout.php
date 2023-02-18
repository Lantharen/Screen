<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class OfferListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'offers';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name')->align('center')->width(200),
            TD::make('description')->width(400)->sort('asc'),
            TD::make('min_price')->sort(),
            TD::make('max_price'),
            TD::make('min_percent')->sort(),
            TD::make('max_percent'),
            TD::make('duration_in_seconds')->sort(),
        ];
    }
}
