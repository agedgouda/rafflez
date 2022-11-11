<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drawing>
 */
class DrawingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'draw_date' => today()->addDays(rand(1, 10)),
            'max_tickets' => rand(100, 5000),
        ];
    }
}
