<?php

use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;


Route::get('/', Login::class)->name('login');

Route::get('/dashboard', Dashboard::class)->name('dashboard');

