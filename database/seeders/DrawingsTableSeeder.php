<?php

namespace Database\Seeders;

use App\Models\Drawing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrawingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drawing::factory()->count(5)->create();
    }
}
