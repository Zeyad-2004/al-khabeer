<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index', ['page_name' => 'index']);
});


Route::get('/index', function () {
    return view('index', ['page_name' => 'index']);
});


Route::get('/login', function () {
    return view('login', ['page_name' => 'login']);
});


Route::get('/courses', function () {
    return view('courses', ['page_name' => 'courses']);
});


Route::get('/about-us', function () {
    return view('about-us', ['page_name' => 'about-us']);
});


Route::get('/contact-us', function () {
    return view('contact-us', ['page_name' => 'contact-us']);
});


Route::get('/cart', function () {
    return view('cart', ['page_name' => 'cart']);
});


Route::get('/course-content', function () {
    return view('course-content', ['page_name' => 'course-content']);
});


Route::get('/check-out/{option?}', function ($option = 'card') {
    if(!in_array($option, ['card', 'bank', 'transfer', 'card2'])){
        return redirect('/check-out');
    }
    else{
        return view('check-out', ['page_name' => 'check-out', 'payment_method' => $option]);
    }
});


Route::get('/profile/{page_id?}', function ($page_id = 1) {
    if( !$page_id || $page_id < 1 || $page_id > 3){
        return redirect('/profile');
    }
    else{
        return view('profile', ['page_id' => $page_id, 'page_name' => 'profile']);
    }
});


Route::get('/section-courses/{section_id?}/{page?}', function ($section_id = 0, $page = 0) {
    if($section_id <= 0 || $page <= 0){
        return redirect('courses');
    }
    else{
        return view('section-courses', ['page_name' => 'section-courses', 'section_id' => $section_id, 'page' => $page]);
    }
});


Route::get('/loading', function () {
    return view('loading', ['page_name' => 'loading']);
});


Route::get('/thanks', function () {
    return view('thanks', ['page_name' => 'thanks']);
});