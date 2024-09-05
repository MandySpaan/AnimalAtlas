<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::create([
            'name' => 'Elephant',
            'scientific_name' => 'Loxodonta africana',
            'description' => 'A large herbivorous mammal.',
            'image_url' => 'https://example.com/elephant.jpg',
            'category' => 'vertebrate',
            'type' => 'mammal',
            'diet' => 'Herbivore',
            'habitat' => 'Terrestrial',
        ]);
    }
}
