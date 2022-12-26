<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class JnReport extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'reports';

    protected $fillable = [
        'user_id',
        'reported_id',
        'type',
        'status',
    ];
}
