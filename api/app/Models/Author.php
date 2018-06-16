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
        'banner',
        'background',
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
