<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Exception;
use Illuminate\Http\JsonResponse;
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
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse {
        Comment::create([
            'comment' => $request->input('comment'),
            'product_id' => $request->input('product_id'),
            'user_id' => $request->user()->id,
        ]);
        return response()->json(['message' => 'comment success']);
    }

    /**
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse {
        try {
            Comment::findOrFail($id)->update(['comment' => $request->input('com')]);
            return response()->json(['message' => 'update success']);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse {
        try {
            Comment::findOrFail($id)->delete();
            return response()->json(['message' => 'delete success']);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }
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
