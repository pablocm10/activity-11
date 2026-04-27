<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/income', function () { return view('income'); })->name('income');
Route::get('/expenses', function () { return view('expenses'); })->name('expenses');