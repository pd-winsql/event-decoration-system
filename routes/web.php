<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/consultation', function () {
    return view('consultation');
});

Route::post('/consultation', function (Request $request) {
    $validated = $request->validate([
        'full_name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'phone' => ['required', 'string', 'max:30'],
        'event_type' => [
            'required',
            'in:wedding,birthday,debut,anniversary,school_program,other',
        ],
        'preferred_event_date' => ['required', 'date', 'after_or_equal: today'],
        'proposed_consultation_date' => ['required', 'date', 'after_or_equal:today'],
        'additional_details' => ['nullable', 'string', 'max: 2000'],
    ]);

    dd($validated); // dd() helper means dump and die
});
