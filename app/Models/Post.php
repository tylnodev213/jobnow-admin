<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'company_id',
        'job_title',
        'levels',
        'district',
        'city',
        'remotable',
        'can_partime',
        'min_salary',
        'max_salary',
        'currency_salary',
        'requirement',
        'start_date',
        'end_date',
        'number_applications',
        'currency_salary',
        'currency_salary',
    ];
}
