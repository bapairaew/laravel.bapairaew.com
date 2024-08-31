<?php

namespace App\Livewire;

use App\Services\CustomParsedown;
use Livewire\Component;

class PostContent extends Component
{
    public $post;
    private $mkd;

    public function __construct()
    {
        $this->mkd = new CustomParsedown();
    }

    public function render()
    {
        return <<<'HTML'
        <div class="prose lg:prose-md dark:prose-invert mx-auto">
            <h1 class="pt-8 m-0">{{ $post->title }}</h1>
            <span class="block pt-8 text-md text-neutral-500">
                {{ (new DateTime(json_decode('"2024-08-30T00:00:00Z"')))->format('d M Y') }}
                 · 
                {{ $post->keywords }}
            </span>
            <div class="pt-4">
                {!! $this->mkd->text($this->post->content) !!}
            </div>
        </div>
        HTML;
    }
}
