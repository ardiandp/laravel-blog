<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produk;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    protected $model = Produk::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kodeproduk' => $this->faker->unique()->numerify('PROD####'),
            'nama_produk' => $this->faker->words(3, true),
            'nama_produk_seo' => Str::slug($this->faker->words(3, true)),
            'kategori_id' => 1, // Ganti sesuai kebutuhan
            'keterangan' => $this->faker->paragraph,
            'harga' => $this->faker->randomFloat(2, 10, 1000),
            'stok' => $this->faker->numberBetween(0, 100),
            'berat' => $this->faker->randomFloat(2, 0.1, 10),
            'gambar' => null, // Ganti sesuai kebutuhan
            'status' => $this->faker->randomElement(['Aktif', 'Nonaktif']),
        ];
    }
}
