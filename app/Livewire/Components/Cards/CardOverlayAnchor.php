<?php

namespace App\Livewire\Components\Cards;

use Livewire\Component;

class CardOverlayAnchor extends Component
{
    public $slot;
    public $id;
    public $href;
    public $class;

    public function render()
    {
        return view('livewire.components.cards.card-overlay-anchor');
    }
}
