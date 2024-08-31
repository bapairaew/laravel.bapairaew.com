@push('title')
    Dom.
@endpush
@push('description')
    Some random website.
@endpush

@pushOnce('styles')
    @vite('resources/views/components/contents/hero/hero-section.css')
    @vite('resources/views/livewire/components/cards/card-overlay-anchor.css')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/views/livewire/components/cards/card-overlay-anchor.js')
@endPushOnce

<div>
    <x-contents.hero.hero-section></x-contents.hero.hero-section>
    <livewire:components.contents.posts.posts-section lazy />
</div>
