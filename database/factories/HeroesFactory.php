<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Heroes>
 */
class HeroesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'strength' => rand(0, 25),
            'agility' => rand(0, 25),
            'intelligence' => rand(0, 25),
            'range' => rand(10, 50),
            'category_id' => rand(1, 3),
            'created_at' => date("Y-m-d H:i:s"),
            'avatar' => '',
            'description' => '',
        ];
        // Schema::create('heroes', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('category_id');
        //     $table->string('name');
        //     $table->float('strength');
        //     $table->float('agility');
        //     $table->float('intelligence');
        //     $table->float('range');
        //     $table->float('avatar');
        //     $table->longText('description');
        //     $table->timestamps();
        // });
    }
}
