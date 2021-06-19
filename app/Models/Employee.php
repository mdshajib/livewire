<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = [
        'full_name',
        'email',
        'address',
        'phone',
        'designation',
        'department',
        'joining_date',
        'photo',
        'created_at',
        'updated_at',
    ];
}
