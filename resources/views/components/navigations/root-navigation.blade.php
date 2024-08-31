@php
    $navs = [
        ['name' => 'About', 'href' => '/'],
        ['name' => 'Projects', 'href' => '/projects'],
        ['name' => 'Posts', 'href' => '/posts'],
        ['name' => 'Photography', 'href' => '/photography'],
    ];
    $navsReversed = array_reverse($navs);
    $currentPath = request()->path();
@endphp

<nav id='root-navigation-nav' class="p-4 sticky top-0 z-10">
    <div id='root-navigation-backdrop'
        class="absolute top-0 left-0 w-full h-full transition-opacity opacity-0 bg-white dark:bg-black"></div>
    <div class="flex container mx-auto sticky">
        <div>
            <div class="text-2xl font-bold not-sr-only">
                <a class="no-underline" href="/">D:</a>
            </div>
            <div class="sr-only">
                <a class="no-underline" href="/">Narudom's website</a>
            </div>
        </div>
        <ul class="flex-1 hidden justify-end items-center md:flex gap-4 no-underline text-neutral-500">
            @foreach ($navsReversed as $nav)
                <li>
                    <a href="{{ $nav['href'] }}"
                        class="{{ $currentPath === $nav['href'] ? 'text-neutral-900 dark:text-white' : '' }}">
                        {{ $nav['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="flex-1 flex justify-end md:hidden">
            <button aria-label="Open menu">
                <x-icons.hamburger></x-icons.hamburger>
            </button>
        </div>
    </div>
</nav>
<x-modals.bottom-sheet id="root-navigation-bottom-sheet">
    <ul class="px-4 py-6 flex flex-col gap-4 text-lg no-underline text-neutral-500">
        @foreach ($navs as $nav)
            <li>
                <a href="{{ $nav['href'] }}"
                    class="block {{ $currentPath === $nav['href'] ? 'text-neutral-900 dark:text-white' : '' }}">
                    {{ $nav['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-modals.bottom-sheet>
