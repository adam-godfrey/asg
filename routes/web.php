<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['domain' => 'asg-web.local'], function() {
    Route::get('/', function () {
        dd('PRO');
    });
});

Route::group(['domain' => 'brookshillfarm.local'], function() {
    Route::get('/', function () {
        return view('brookshillfarm.index.index');
    })->name('brookshillfarm.index.index');

    Route::get('about', function () {
        return view('brookshillfarm.about.index');
    })->name('brookshillfarm.about.index');

    Route::get('accomodation', function () {
        return view('brookshillfarm.glamping.accomodation');
    })->name('brookshillfarm.glamping.accomodation');

    Route::get('activities', function () {
        return view('brookshillfarm.glamping.activities');
    })->name('brookshillfarm.glamping.activities');

    Route::get('horsey-holidays', function () {
        return view('brookshillfarm.glamping.horsey-holidays');
    })->name('brookshillfarm.glamping.horsey-holidays');

    Route::prefix('how-to-book')->group(function () {
        Route::get('/', 'BookingController@index')->name('brookshillfarm.glamping.booking.index');
        Route::post('submit', 'BookingController@send')->name('brookshillfarm.glamping.booking.send');
    });

    Route::get('brookshill-hampers', function () {
        return view('brookshillfarm.glamping.hampers');
    })->name('brookshillfarm.glamping.hampers');

    Route::get('eating-out', function () {
        return view('brookshillfarm.glamping.eating-out');
    })->name('brookshillfarm.glamping.eating-out');


    Route::get('countryside-management', function () {
        return view('brookshillfarm.countryside-management.index');
    })->name('brookshillfarm.countryside-management.index');

    Route::get('events', function () {
        return view('brookshillfarm.events.index');
    })->name('brookshillfarm.events.index');

    Route::get('news', function () {
        return view('brookshillfarm.news.index');
    })->name('brookshillfarm.news.index');

    Route::get('gallery', function () {
        return view('brookshillfarm.gallery.index');
    })->name('brookshillfarm.gallery.index');

    Route::get('contact-us', function () {
        return view('brookshillfarm.contact.index');
    })->name('brookshillfarm.contact.index');

    Route::prefix('admin')->namespace('Admin')->group(function () {
        Route::get('test', 'IndexController@index')->name('brookshillfarm.admin.dashboard');
    });
});
