<?php

namespace App\Console\Commands;

use App\Jobs\SendNewPostNotification;
use App\Models\UserPostNotification;
use Illuminate\Console\Command;

class SendNewPostNotificationEmailsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-new-post-notification-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send new post notification emails to users.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $notifications = UserPostNotification::with(['user', 'post.website'])->where('sent', false)->get();
        foreach ($notifications as $notification) {
            // DispatchSync is just for this coding exercise. In production, we should use dispatch.
            SendNewPostNotification::dispatchSync($notification);
        }
    }
}
