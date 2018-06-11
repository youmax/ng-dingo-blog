<?php

namespace App\Models;

class Menu extends Model
{

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'path',
    ];
}
