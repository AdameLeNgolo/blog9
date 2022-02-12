<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $libelle = $this->faker->sentence();
        return [
            'libelle' => $libelle,
            'slug' => Str::slug($libelle),
            'description' => $this->faker->paragraph($nbSentences = 4, $variableNbSentences = true),
            'user_id' => User::all()->random(1)->first()
        ];
    }
}
