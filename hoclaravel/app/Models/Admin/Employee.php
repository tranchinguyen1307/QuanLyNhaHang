<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
