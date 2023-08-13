<?php

namespace Database\Factories;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class KategoriFactory extends Factory
{
    protected $model = Kategori::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_kategori' => $this->faker->words(2, true),
            'keterangan' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['Aktif', 'Nonaktif']),
        ];
    }
}
