<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class CommentController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show(int $id): Response {
        //
    }

    /**
     * Display comments by product id
     *
     * @param int $product_id
     * @return AnonymousResourceCollection
     */
    public function getCommentByProduct(int $product_id): AnonymousResourceCollection {
        $comments = Comment::where('product_id', $product_id)->get();
        return CommentResource::collection($comments);
    }
}
