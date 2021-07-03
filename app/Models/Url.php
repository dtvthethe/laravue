<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Url extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'original_url',
        'shorter_url',
        'visit',
    ];
}
