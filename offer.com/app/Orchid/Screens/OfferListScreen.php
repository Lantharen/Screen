<?php

namespace App\Orchid\Screens;

use App\Models\Offer;
use App\Orchid\Layouts\OfferListLayout;
use Orchid\Screen\Screen;

class OfferListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'offers' => Offer::filters()->defaultSort('id')->paginate(15)

        ];


    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'OfferListScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            OfferListLayout::class
        ];
    }
}
