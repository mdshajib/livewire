<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EmployeeManager;
use App\Http\Livewire\EmployeeList;
use App\Http\Livewire\EmployeeShow;

Route::get('/', function () {
    return view('welcome');
});

Route::get('employee', EmployeeManager::class);
Route::get('employees', EmployeeList::class);
Route::get('employee/{id}', EmployeeShow::class);
