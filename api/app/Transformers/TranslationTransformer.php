<?php

namespace App\Transformers;

use App\Models\Translation;
use League\Fractal\TransformerAbstract;

class TranslationTransformer extends TransformerAbstract
{
    public function transform(Translation $translation)
    {
        return $translation->data;
    }
}
