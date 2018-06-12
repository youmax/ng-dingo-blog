<?php

namespace App\Http\Controllers;

use App\Models\Translation;
use App\Transformers\TranslationTransformer;
use Dingo\Api\Http\Request;

/**
 * Translation resource representation
 *
 * @Resource("Menu",uri="/menus")
 */
class TranslationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show all menus
     *
     * Get a JSON representation of all the menus.
     *
     * @GET("/menus")
     * @Versions({"v1"})
     */
    public function index(Request $request)
    {
        $translations = Translation::all();
        return $this->response->collection($translations, new TranslationTransformer);
    }
    /**
     * Get Menu by id
     *
     * @param string $id
     * @return void
     */
    public function show($name)
    {
        $translation = Translation::where('name', $name)->firstOrFail();
        return $this->response->item($translation, new TranslationTransformer);
    }
}
