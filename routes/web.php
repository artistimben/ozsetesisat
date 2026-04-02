<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $services = \App\Models\Service::where('is_active', true)->orderBy('order')->get();
    $testimonials = \App\Models\Testimonial::all();
    $sliders = \App\Models\Slider::where('is_active', true)->orderBy('order')->get();
    return view('welcome', compact('services', 'testimonials', 'sliders'));
});

Route::get('/hizmetler', function () {
    $services = \App\Models\Service::where('is_active', true)->orderBy('order')->get();
    return view('services.index', compact('services'));
})->name('services.index');

Route::get('/hizmetler/{slug}', function ($slug) {
    $service = \App\Models\Service::where('slug', $slug)->firstOrFail();
    return view('services.show', compact('service'));
})->name('services.show');

Route::get('/projeler', function () {
    $projects = \App\Models\Project::all();
    return view('projects', compact('projects'));
})->name('projects');

Route::get('/iletisim', function () {
    return view('contact');
})->name('contact');

Route::post('/iletisim', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
