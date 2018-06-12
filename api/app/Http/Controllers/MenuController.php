<?php

namespace App\Http\Controllers;

use Dingo\Api\Http\Request;

use App\Models\Menu;
use App\Transformers\MenuTransformer;

/**
 * Menu resource representation
 *
 * @Resource("Menu",uri="/menus")
 */
class MenuController extends Controller
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
        $menus = Menu::all();
        return $this->response->collection($menus, new MenuTransformer);
    }
    /**
     * Get Menu by id
     *
     * @param string $id
     * @return void
     */
    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return $this->response->item($menu, new MenuTransformer);
    }
}
