<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class JnNewsUser extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'news_users';

    protected $fillable = [
        'title',
        'description',
        'from_user_type',
        'from_user_id',
        'to_user_type',
        'status',
        'public_from',
        'public_to',
    ];
}
