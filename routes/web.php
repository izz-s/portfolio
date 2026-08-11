<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio.index');
})->name('home');

Route::get('/projects/eb-health', function () {
    return view('portfolio.projects.eb-health');
})->name('projects.eb-health');

Route::get('/projects/askedir', function () {
    return view('portfolio.projects.askedir');
})->name('projects.askedir');

Route::get('/projects/company-profile', function () {
    return view('portfolio.projects.company-profile');
})->name('projects.company-profile');
