<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EmployeeManager;
use App\Http\Livewire\EmployeeList;
use App\Http\Livewire\EmployeeShow;
use App\Http\Livewire\Login;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', Login::class);
Route::get('employee', EmployeeManager::class);
Route::get('employees', EmployeeList::class);
Route::get('employee/{id}', EmployeeShow::class);
