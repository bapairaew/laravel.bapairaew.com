<?php

namespace App\Livewire;

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
        return <<<'HTML'
        <section class="container mx-auto px-2 py-8">
            <h2 class="font-black text-2xl pb-8">Posts</h2>
            <ul class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3">
                <li>
                    <x-contents.posts.post-card-loading />
                </li>
                <li>
                    <x-contents.posts.post-card-loading />
                </li>
                <li>
                    <x-contents.posts.post-card-loading />
                </li>
                <li>
                    <x-contents.posts.post-card-loading />
                </li>
                <li>
                    <x-contents.posts.post-card-loading />
                </li>
                <li>
                    <x-contents.posts.post-card-loading />
                </li>
            </ul>
            <a class="w-full text-center block p-4 mt-4" href="/posts">All posts →</a>
        </section>
        HTML;
    }

    public function render()
    {
        return <<<'HTML'
        <section class="container mx-auto px-2 py-8">
            <h2 class="font-black text-2xl pb-8">Posts</h2>
            <ul class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                <li>
                    <x-contents.posts.post-card :post="$post" />
                </li>
                @endforeach
            </ul>
            <a class="w-full text-center block p-4 mt-4" href="/posts">All posts →</a>
        </section>
        HTML;
    }
}
