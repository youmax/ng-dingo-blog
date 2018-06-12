<?php

namespace App\Transformers;

use App\Models\Author;
use League\Fractal\TransformerAbstract;

class AuthorTransformer extends TransformerAbstract
{

    protected function translateFields(array $values, array $fields)
    {
        $translated = [];
        foreach ($values as $value) {
            foreach ($fields as $field) {
                $value[$field] = $value[$field][env('APP_LOCALE')] ?? '';
            }
            $translated[] = $value;
        }
        return $translated;
    }


    public function transform(Author $author)
    {
        return [
            'id' => $author->id,
            'name' => $author->name,
            'job' => $author->job,
            'greeting' => $author->greeting,
            'introduction' => $author->introduction,
            'socialLinks' => $author->socialLinks,
            'services' => $this->translateFields($author->services, ['title', 'desc']),
            'location' => $author->location,
            'skills' => $author->skills,
            'educations' => collect($this->translateFields($author->educations, ['school', 'degree', 'desc']))
                ->sortByDesc(function ($education, $key) {
                    return (int) array_last(explode('-', $education['date']));
                })->values(),
            'experiences' => $this->translateFields($author->experiences, ['date', 'desc', 'name', 'position']),
        ];
    }
}
