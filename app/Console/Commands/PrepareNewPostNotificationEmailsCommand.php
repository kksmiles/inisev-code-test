<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\UserPostNotification;
use App\Models\UserWebsiteSubscription;
use Illuminate\Console\Command;

class PrepareNewPostNotificationEmailsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:prepare-new-post-notification-emails {start_date} {end_date}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is not really needed since we have PostObserver handling this. But in case the observer fails, this command can be used to prepare new post notification emails that are missed.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $startDate = date('Y-m-d H:i:s', strtotime($this->argument('start_date') ?? now()->subDay()->toDateString()));
        $endDate = date('Y-m-d H:i:s', strtotime($this->argument('end_date') ?? now()->toDateString()));

        $existingNotificationMap = [];
        $notifications = UserPostNotification::whereBetween('created_at', [$startDate, $endDate])->get();
        foreach ($notifications as $notification) {
            $existingNotificationMap[$notification->user_id][$notification->post_id] = true;
        }

        $userSubscriptionMap = [];
        $subscriptions = UserWebsiteSubscription::where('is_subscribed', true)
            ->whereBetween('subscribed_at', [$startDate, $endDate])
            ->get();
        foreach ($subscriptions as $subscription) {
            $userSubscriptionMap[$subscription->user_id][$subscription->website_id] = $subscription->subscribed_at;
        }
        $posts = Post::whereBetween('created_at', [$startDate, $endDate])->get();

        foreach ($posts as $post) {
            $users = $post->website->subscribed_users;
            foreach ($users as $user) {
                // if the user is not already notified about this post
                if (! isset($existingNotificationMap[$user->id][$post->id])) {
                    $subscribedAt = $userSubscriptionMap[$user->id][$post->website_id];
                    // if the user is subscribed to the website before the post was created
                    if ($subscribedAt <= $post->created_at) {
                        UserPostNotification::create([
                            'user_id' => $user->id,
                            'post_id' => $post->id,
                            'sent' => false,
                        ]);
                    }
                }
            }
        }
    }
}
