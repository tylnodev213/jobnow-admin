<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class JnObjectLanguage extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'object_language';

    protected $fillable = [
        'object_id',
        'language_id',
        'object_type',
    ];
}
