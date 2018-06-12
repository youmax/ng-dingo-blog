<?php

namespace App\Transformers;

use App\Models\Menu;
use League\Fractal\TransformerAbstract;

class MenuTransformer extends TransformerAbstract
{
    public function transform(Menu $menu)
    {
        return [
            'id' => $menu->id,
            'name' => $menu->name,
            'path' => $menu->path
        ];
    }
}
