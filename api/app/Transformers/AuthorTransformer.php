<?php

namespace App\Transformers;

use App\Models\Author;
use League\Fractal\TransformerAbstract;

class AuthorTransformer extends TransformerAbstract
{

    protected function translateField(array $values, array $fields)
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

    protected function translateServices($services)
    {
        $fields = ['title', 'desc'];
        return $this->translateField($services, $fields);
    }

    protected function translateEducations($educations)
    {
        $fields = ['school', 'degree', 'desc'];
        return $this->translateField($educations, $fields);
    }

    public function transform(Author $author)
    {
        return [
            'id' => (int) $author->id,
            'name' => $author->name,
            'job' => $author->job,
            'greeting' => $author->greeting,
            'introduction' => $author->introduction,
            'socialLinks' => $author->socialLinks,
            'services' => $this->translateServices($author->services),
            'location' => $author->location,
            'skills' => $author->skills,
            'educations' => collect($this->translateEducations($author->educations))->sortByDesc(function ($education, $key) {
                return (int) array_last(explode('-', $education['date']));
            })->values(),
            'experiences' => $author->experiences,
        ];
    }
}
