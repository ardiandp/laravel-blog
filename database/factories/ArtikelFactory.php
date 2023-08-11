<?php

namespace Database\Factories;
use App\Models\Artikel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArtikelFactory extends Factory
{
    protected $model = Artikel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence,
            'judul_seo' => $this->faker->slug,
            'artikel' => $this->faker->paragraphs(3, true),
            'publish' => $this->faker->boolean,
        ];
    }
}
