<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Spatie\Translatable\HasTranslations;

abstract class Model extends Eloquent
{

    use HasTranslations;
}
