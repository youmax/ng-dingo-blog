<?php

namespace App\Transformers;

use App\Models\Author;
use League\Fractal\TransformerAbstract;

class AuthorTransformer extends TransformerAbstract
{
    public function transform(Author $author)
    {
        return [
            'id' => (int) $author->id,
            'name' => $author->name,
            'job' => $author->job
        ];
    }
}
