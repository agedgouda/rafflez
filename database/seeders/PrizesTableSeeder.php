<?php

namespace Database\Seeders;

use App\Models\Prize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class PrizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prize::factory()
            ->count(10)
            ->state(new Sequence(
                ['authentic' => true],
                ['authentic' => false],
            ))->create();
    }
}
