<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nama' => 'elekronik',
            'slug' => 'elekronik',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'nama' => 'elekronik1',
            'slug' => 'elekronik1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'nama' => 'elekronik2',
            'slug' => 'elekronik2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'nama' => 'elekronik3',
            'slug' => 'elekronik3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'nama' => 'elekronik4',
            'slug' => 'elekronik4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
