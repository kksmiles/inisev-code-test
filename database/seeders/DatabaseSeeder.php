<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\PostFactory;
use Database\Factories\UserFactory;
use Database\Factories\WebsiteFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        UserFactory::new()->count(10)->create();
        WebsiteFactory::new()->count(20)->create();
        PostFactory::new()->count(30)->create();

        $this->call([
            UserWebsiteSubscriptionSeeder::class,
        ]);
    }
}
