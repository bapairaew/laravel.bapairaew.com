@extends('layouts.app')

@section('content')
    <x-contents.hero.hero-section></x-contents.hero.hero-section>
    <livewire:posts-section lazy />
@endsection

@pushOnce('styles')
    @vite('resources/views/components/modals/bottom-sheet.css')
    @vite('resources/views/components/contents/hero/hero-section.css')
    @vite('resources/views/components/cards/card-overlay-anchor.css')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/views/components/modals/bottom-sheet.js')
    @vite('resources/views/components/cards/card-overlay-anchor.js')
@endPushOnce
