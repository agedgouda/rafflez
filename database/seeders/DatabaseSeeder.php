<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Drawing;
use App\Models\Prize;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // PrizesTableSeeder::class, // 10
            // DrawingsTableSeeder::class,
        ]);
        Category::factory()
            ->has(Drawing::factory()->count(5)->for(Prize::factory()))
            ->create();
        
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
