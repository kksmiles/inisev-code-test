<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostController\StorePostRequest;
use App\Http\Requests\PostController\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

/**
 * @group Post management
 *
 * APIs for managing posts
 */
class PostController extends Controller
{
    /**
     * Index Posts
     *
     * This endpoint will list all posts
     *
     * @responseFile status=200 scenario="Success" app/Http/Responses/PostController/Index.json
     */
    public function index()
    {
        return PostResource::collection(Post::paginate());
    }

    /**
     * Store Post
     *
     * This endpoint will create a new post
     *
     * @responseFile status=201 scenario="Success" app/Http/Responses/PostController/Store.json
     * @responseFile status=400 scenario="Validation Error" app/Http/Responses/400.json
     */
    public function store(StorePostRequest $request)
    {
        try {
            $attributes = $request->validated();
            $post = Post::create($attributes);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong : ' . $e->getMessage(),
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Post successfully created',
            'data' => new PostResource($post),
        ], 201);
    }

    /**
     * Show Post
     *
     * This endpoint will show the details of the post
     *
     * @responseFile status=200 scenario="Success" app/Http/Responses/PostController/Show.json
     * @responseFile status=404 scenario="Not Found" app/Http/Responses/404.json
     */
    public function show(Post $post)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Post successfully retrieved',
            'data' => new PostResource($post->load('website')),
        ], 200);
    }

    /**
     * Update Post
     *
     * This endpoint will update a Post
     *
     * @responseFile status=200 scenario="Success" app/Http/Responses/PostController/Update.json
     * @responseFile status=400 scenario="Validation Error" app/Http/Responses/400.json
     * @responseFile status=404 scenario="Not Found" app/Http/Responses/404.json
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        try {
            $attributes = $request->validated();
            $post->update($attributes);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong : ' . $e->getMessage(),
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Post successfully updated',
            'data' => new PostResource($post),
        ], 200);
    }

    /**
     * Delete post
     *
     * This endpoint will delete a post
     *
     * @responseFile status=200 scenario="Success" app/Http/Responses/PostController/Destroy.json
     * @responseFile status=404 scenario="Not Found" app/Http/Responses/404.json
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong : ' . $e->getMessage(),
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Post successfully deleted',
        ], 200);
    }
}
