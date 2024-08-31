<?php

namespace App\Livewire\Components\Contents\Posts;

use Livewire\Component;

class PostsList extends Component
{
    public $posts;

    public function render()
    {
        return view('livewire.components.contents.posts.posts-list');
    }
}
