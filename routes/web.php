<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $businessName = 'Creative Moments Events Planning and Decoration Services';

    $services = [
        'Wedding Decorations',
        'Birthday Decorations',
        'Debut Decorations',
        'Anniversary Decorations',
        'School Event Decorations'
    ];

    return view('home', [
        'businessName' => $businessName,
        'services' => $services
    ]);
});

Route::get('/services', function () {
    return view('services'); 
});

Route::get('/consultation', function() {
    return view('consultation');
});
