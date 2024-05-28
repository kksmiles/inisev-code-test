<?php

namespace App\Jobs;

use App\Mail\NewPostNotification;
use App\Models\Post;
use App\Models\User;
use App\Models\UserPostNotification;
use App\Models\Website;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNewPostNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected UserPostNotification $notification;

    protected Post $post;

    protected User $user;

    protected Website $website;

    /**
     * Create a new job instance.
     */
    public function __construct(UserPostNotification $notification)
    {
        $this->notification = $notification;
        $this->post = $notification->post;
        $this->user = $notification->user;
        $this->website = $notification->post->website;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        Mail::to($this->user->email)->send(
            new NewPostNotification($this->post, $this->website, $this->user)
        );
        $this->notification->update(['sent' => true]);
    }
}
