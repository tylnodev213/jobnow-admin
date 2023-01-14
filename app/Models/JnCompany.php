<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class JnCompany extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'companies';

    protected $timestamp = false;

    protected $fillable = [
        'name',
        'address',
        'country',
        'zipcode',
        'phone',
        'email',
        'logo',
        'updated_at',
        'created_at',
    ];
}
