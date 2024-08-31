<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Index;
use App\Livewire\Pages\Posts\Index as PostsIndex;
use App\Livewire\Pages\Posts\Post;
use App\Livewire\Pages\Projects\Index as ProjectsIndex;
use App\Livewire\Pages\Projects\Project;

Route::get('/', Index::class);

Route::get('/posts', PostsIndex::class);
Route::get('/posts/{slug}', Post::class);

Route::get('/projects', ProjectsIndex::class);
Route::get('/projects/{slug}', Project::class);
