<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group  Comment
 *
 * APIs for comment
 */
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
     * @return CommentResource
     */
    public function show(int $id): CommentResource {
        $comment = Comment::findOrFail($id);
        return new CommentResource($comment);
    }

    /**
     * Store a newly Comment
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request): Response {
        $request->user()->id;
    }

    /**
     * Display comments by product id
     *
     * @param int $product_id
     * @return AnonymousResourceCollection
     */
    public function getCommentsByProduct(int $product_id): AnonymousResourceCollection {
        $comments = Comment::where('product_id', $product_id)->get();
        return CommentResource::collection($comments);
    }
}
