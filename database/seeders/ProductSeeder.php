<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nama' => 'Smartphone ABC',
                'slug' => 'smartphone-abc',
                'deskripsi' => 'Murah dan berkualitas',
                'harga' => 3000000,
                'stok' => 80,
                'gambar' => 'hp-abc.jpg',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Laptop XYZ',
                'slug' => 'laptop-xyz',
                'deskripsi' => 'Laptop untuk pelajar',
                'harga' => 5500000,
                'stok' => 50,
                'gambar' => 'laptop-xyz.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Headphone BassPro',
                'slug' => 'headphone-basspro',
                'deskripsi' => 'Suara bass mantap',
                'harga' => 450000,
                'stok' => 120,
                'gambar' => 'headphone-basspro.jpg',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Keyboard RGB',
                'slug' => 'keyboard-rgb',
                'deskripsi' => 'Keyboard gaming RGB full color',
                'harga' => 350000,
                'stok' => 60,
                'gambar' => 'keyboard-rgb.jpg',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Mouse Wireless',
                'slug' => 'mouse-wireless',
                'deskripsi' => 'Mouse tanpa kabel untuk kerja efisien',
                'harga' => 200000,
                'stok' => 90,
                'gambar' => 'mouse-wireless.jpg',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
