<?php

namespace App\Livewire\Components\Contents\Posts;

use Livewire\Component;

class PostsSection extends Component
{
    public $posts;

    public function mount()
    {
        $response = file_get_contents('https://data.bapairaew.com/posts');
        $this->posts = json_decode($response);
    }

    public function placeholder()
    {
        return view('livewire.components.contents.posts.posts-section-loading');
    }

    public function render()
    {
        return view('livewire.components.contents.posts.posts-section');
    }
}
