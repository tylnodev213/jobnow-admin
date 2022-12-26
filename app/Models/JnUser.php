<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class JnUser extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'avatar',
        'email',
        'password',
        'phone',
        'link',
        'role',
        'bio',
        'position',
        'gender',
        'city',
        'company_id',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
