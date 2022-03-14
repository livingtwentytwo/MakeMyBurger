<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burger extends Model
{
    use HasFactory;

    protected $casts = [
        'meat' => 'array',
        'vegetables' => 'array',
        'dressing' => 'array',
        'extras' => 'array',
    ];
}
