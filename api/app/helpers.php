<?php

if (function_exists('resource')) {
    throw new Error('resource Already Exist!');
} else {
    /**
     * Create a rest Resource route
     *
     * @param $path
     * @param $controller
     * @param $name
     * @param array $exclude
     */
    function resource($path, $controller, $name = null, $exclude = [])
    {
        global $api;
        $name = $name ?? $path;
        /**
         * get method items
         */
        $generate_route = function ($method, $routeName, $pathExt = '') use ($api, $path, $controller, $name, $exclude) {
            $restItem = ['method' => $method, 'name' => $routeName, 'pathExt' => $pathExt];
            if (in_array($restItem['name'], $exclude)) {
                return;
            }
            $api->{$restItem['method']}($path . $restItem['pathExt'], [
                'as' => $name . '.' . $restItem['name'],
                'uses' => $controller . '@' . $restItem['name'],
            ]);
        };

        $generate_route('get', 'index');
        $generate_route('get', 'show', '/{id}');
        $generate_route('post', 'store');
        $generate_route('put', 'update', '/{id}');
        $generate_route('delete', 'destroy', '/{id}');
    }
}
