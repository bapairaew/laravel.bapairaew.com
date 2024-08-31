<?php

namespace App\Livewire\Components\Skeletons;

use Livewire\Component;

class TextSkeleton extends Component
{
    public $class;
    public $slot;

    public function render()
    {
        return view('livewire.components.skeletons.text-skeleton');
    }
}
