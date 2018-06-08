<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Transformers\AuthorTransformer;
use Dingo\Api\Http\Request;

/**
 * Author resource representation
 *
 * @Resource("Author",uri="/authors")
 */
class AuthorController extends Controller
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
     * Show all authors
     *
     * Get a JSON representation of all the authors.
     *
     * @GET("/authors")
     * @Versions({"v1"})
     */
    public function index(Request $request)
    {
        $authors = Author::paginate(1);
        return $this->response->paginator($authors, new AuthorTransformer);
    }
    /**
     * Get Author by id
     *
     * @return void
     */
    public function show(string $id)
    {
        $author = Author::findOrFail((int) $id);
        return $this->response->item($author, new AuthorTransformer);
    }

    public function resume(string $name)
    {
        return response()->download(storage_path('resume/'.$name.'.pdf'));
    }
}
