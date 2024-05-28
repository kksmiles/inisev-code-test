<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebsiteController\StoreWebsiteRequest;
use App\Http\Requests\WebsiteController\UpdateWebsiteRequest;
use App\Http\Resources\WebsiteResource;
use App\Models\Website;

/**
 * @group Website management
 *
 * APIs for managing websites
 */
class WebsiteController extends Controller
{
    /**
     * Index Websites
     *
     * This endpoint will list all websites
     *
     * @responseFile status=200 scenario="Success" app/Http/Responses/WebsiteController/Index.json
     */
    public function index()
    {
        return WebsiteResource::collection(Website::paginate());
    }

    /**
     * Store Website
     *
     * This endpoint will create a new website
     *
     * @responseFile status=201 scenario="Success" app/Http/Responses/WebsiteController/Store.json
     * @responseFile status=400 scenario="Validation Error" app/Http/Responses/400.json
     */
    public function store(StoreWebsiteRequest $request)
    {
        try {
            $attributes = $request->validated();
            $website = Website::create($attributes);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong : '.$e->getMessage(),
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Website successfully created',
            'data' => new WebsiteResource($website),
        ], 201);
    }

    /**
     * Show Website
     *
     * This endpoint will show the details of the website
     *
     * @responseFile status=200 scenario="Success" app/Http/Responses/WebsiteController/Show.json
     * @responseFile status=404 scenario="Not Found" app/Http/Responses/404.json
     */
    public function show(Website $website)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Website successfully retrieved',
            'data' => new WebsiteResource($website),
        ], 200);
    }

    /**
     * Update Website
     *
     * This endpoint will update a Website
     *
     * @responseFile status=200 scenario="Success" app/Http/Responses/WebsiteController/Update.json
     * @responseFile status=400 scenario="Validation Error" app/Http/Responses/400.json
     * @responseFile status=404 scenario="Not Found" app/Http/Responses/404.json
     */
    public function update(UpdateWebsiteRequest $request, Website $website)
    {
        try {
            $attributes = $request->validated();
            $website->update($attributes);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong : '.$e->getMessage(),
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Website successfully updated',
            'data' => new WebsiteResource($website),
        ], 200);
    }

    /**
     * Delete website
     *
     * This endpoint will delete a website
     *
     * @responseFile status=200 scenario="Success" app/Http/Responses/WebsiteController/Destroy.json
     * @responseFile status=404 scenario="Not Found" app/Http/Responses/404.json
     */
    public function destroy(Website $website)
    {
        try {
            $website->delete();
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong : '.$e->getMessage(),
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Website successfully deleted',
        ], 200);
    }
}
