<?php

namespace App\Models;

class Author extends Model
{
    public $translatable = [
        'job',
        'greeting',
        'introduction'
    ];

    protected $fillable = [
        'name',
        'email',
        'job',
        'greeting',
        'introduction',
        'socialLinks',
        'services',
        'location',
        'skills',
        'educations',
        'experiences'
    ];
}
