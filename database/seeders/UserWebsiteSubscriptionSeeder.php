<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Website;
use Illuminate\Database\Seeder;

class UserWebsiteSubscriptionSeeder extends Seeder
{
    private static function getRandomAttributes(): array
    {
        $isSubscribed = rand(0, 1);
        if ($isSubscribed) {
            return [
                'is_subscribed' => true,
                'subscribed_at' => now(),
                'unsubscribed_at' => null,
            ];
        } else {
            return [
                'is_subscribed' => false,
                'subscribed_at' => now()->subDays(rand(1, 30)),
                'unsubscribed_at' => now(),
            ];
        }
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::all()->each(function (User $user) {
            $firstId = Website::inRandomOrder()->first()->id;
            $attributes = self::getRandomAttributes();
            $user->websites()->attach($firstId, $attributes);

            $secondId = Website::whereNotIn('id', [$firstId])->inRandomOrder()->first();
            $attributes = self::getRandomAttributes();
            $user->websites()->attach($secondId, $attributes);
        });
    }
}
