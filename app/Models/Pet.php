<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;


    protected $guarded = [];

    protected $hidden = [];
    protected $casts = [];

    protected $fillable = [
        'description',
        'type',
        'color',
        'photo',
        'city',
        'shelter',
        'phone',
        'rescued',
        'active',
        'donation',
    ];


}
