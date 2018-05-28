<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Transformers\AuthorTransformer;
use Illuminate\Http\Request;

/**
 * Author resource representation
 *
 * @Resource("Author",uri="/author")
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
        $authors = Author::paginate(10);
        return $this->response->paginator($authors, new AuthorTransformer);
    }
    /**
     * Get Author by id
     *
     * @return void
     */
    public function show($id = null)
    {
        $author = Author::findOrFail($id);
        return $this->response->item($author);
    }
}
