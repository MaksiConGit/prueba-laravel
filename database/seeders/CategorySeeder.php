<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category();
        $category->name = 'Soy una';
        $category->slug = 'soy-una-una-prueba';
        $category->beneficios = 'una prueba :D';
        $category->save();

        Category::factory(100)->create();
    }
}
