<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Index;
use App\Livewire\Pages\Posts\Index as PostsIndex;
use App\Livewire\Pages\Posts\Post;

Route::get('/', Index::class);

Route::get('/posts', PostsIndex::class);
Route::get('/posts/{slug}', Post::class);
