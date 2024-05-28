<?php

use App\Console\Commands\PrepareNewPostNotificationEmailsCommand;
use App\Console\Commands\SendNewPostNotificationEmailsCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

/*

This is not really needed since we have PostObserver handling the creation of new post notifications.
But if we want to manually prepare new post notification emails that are missed, we can use this command.

Schedule::command(PrepareNewPostNotificationEmailsCommand::class, [now()->subMinutes(5)->toDateTimeString(), now()->toDateTimeString()])->everyFiveMinutes();
*/

Schedule::command(SendNewPostNotificationEmailsCommand::class)->everyFiveMinutes();
