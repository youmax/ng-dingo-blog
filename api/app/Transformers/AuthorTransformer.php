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
            'job' => $author->job,
            'greeting' => $author->greeting,
            'introduction' => $author->introduction,
            'socialLinks' => $author->socialLinks,
            'services' => $author->services,
            'location' => $author->location,
            'skills' => $author->skills,
            'educations' => collect($author->educations)->sortByDesc(function ($education, $key) {
                return (int) array_last(explode('-', $education['date']));
            })->values(),
            'experiences' => $author->experiences
        ];
    }
}
