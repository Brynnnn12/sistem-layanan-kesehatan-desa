<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/jadwal-kegiatan', App\Livewire\Jadwal\JadwalKegiatan::class)->name('jadwal.kegiatan');
Route::get('/riwayat-pemeriksaan', App\Livewire\Riwayat\RiwayatPemeriksaan::class)->name('riwayat.pemeriksaan');
Route::get('/about', App\Livewire\About\About::class)->name('about');
Route::get('/faq', App\Livewire\Faq\Faq::class)->name('faq');

//jad

require __DIR__ . '/auth.php';
