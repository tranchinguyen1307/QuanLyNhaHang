<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $table = 'employees';

    protected $fillable = [
        'username',
        'email',
        'password',
        'role_id',
        'name',
        'salary',
        'created_at',
        'status',
        'img',
        'address',
        'phone',
    ];

    protected $hidden = [
        'password',
    ];
}

