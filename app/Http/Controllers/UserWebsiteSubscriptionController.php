<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserWebsiteSubscriptionController\SubscriptionRequest;
use App\Models\User;
use App\Models\UserWebsiteSubscription;
use App\Models\Website;

/**
 * @group Subscription management
 *
 * APIs for managing subscriptions
 */
class UserWebsiteSubscriptionController extends Controller
{
    /**
     * Subscribe
     *
     * This endpoint will subscribe the user to the website
     *
     * @responseFile status=200 scenario="Success" app/Http/Responses/UserWebsiteSubscriptionController/Subscribe.json
     * @responseFile status=404 scenario="Not Found" app/Http/Responses/404.json
     */
    public function subscribe(SubscriptionRequest $request, Website $website)
    {
        try {
            $attributes = $request->validated();
            $user = User::where('email', $attributes['user_email'])->firstOrFail();

            // Only subscribe if the user is not already subscribed
            if (! $user->subscribed_websites->contains($website)) {
                UserWebsiteSubscription::updateOrCreate(
                    [
                        'user_id' => $user['id'],
                        'website_id' => $website['id'],
                    ],
                    [
                        'is_subscribed' => true,
                        'subscribed_at' => now(),
                        'unsubscribed_at' => null,
                    ]
                );
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong : '.$e->getMessage(),
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully subscribed',
        ], 200);
    }

    /**
     * Unsubscribe
     *
     * This endpoint will subscribe the user to the website
     *
     * @responseFile status=200 scenario="Success" app/Http/Responses/UserWebsiteSubscriptionController/Unsubscribe.json
     * @responseFile status=404 scenario="Not Found" app/Http/Responses/404.json
     */
    public function unsubscribe(SubscriptionRequest $request, Website $website)
    {
        try {
            $attributes = $request->validated();
            $user = User::where('email', $attributes['user_email'])->firstOrFail();

            // Only unsubscribe if the user is not already subscribed
            if (! $user->unsubscribed_websites->contains($website)) {
                UserWebsiteSubscription::updateOrCreate(
                    [
                        'user_id' => $user['id'],
                        'website_id' => $website['id'],
                    ],
                    [
                        'is_subscribed' => false,
                        'unsubscribed_at' => now(),
                    ]
                );
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong : '.$e->getMessage(),
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully unsubscribed',
        ], 200);
    }
}
