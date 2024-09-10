<?php

namespace Database\Seeders;

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
            'fun_fact' => "They're the world's largest land animal.",
            'image_url' => 'https://example.com/elephant.jpg',
            'category' => 'vertebrate',
            'type' => 'mammal',
            'diet' => 'herbivore',
            'habitat' => 'terrestrial',
        ]);

        Animal::create([
            'name' => 'African Grey Parrot',
            'scientific_name' => 'Psittacus erithacus',
            'fun_fact' => 'African Grey Parrots are known for their intelligence and ability to mimic human speech.',
            'image_url' => 'https://example.com/african_grey_parrot.jpg',
            'category' => 'vertebrate',
            'type' => 'bird',
            'diet' => 'herbivore',
            'habitat' => 'terrestrial',
        ]);

        Animal::create([
            'name' => 'Great White Shark',
            'scientific_name' => 'Carcharodon carcharias',
            'fun_fact' => 'Great white sharks can detect a drop of blood in 25 gallons of water.',
            'image_url' => 'https://example.com/great_white_shark.jpg',
            'category' => 'vertebrate',
            'type' => 'fish',
            'diet' => 'carnivore',
            'habitat' => 'aquatic',
        ]);

        Animal::create([
            'name' => 'Komodo Dragon',
            'scientific_name' => 'Varanus komodoensis',
            'fun_fact' => 'Komodo dragons have venomous saliva.',
            'image_url' => 'https://example.com/komodo_dragon.jpg',
            'category' => 'vertebrate',
            'type' => 'reptile',
            'diet' => 'carnivore',
            'habitat' => 'terrestrial',
        ]);

        Animal::create([
            'name' => 'Clownfish',
            'scientific_name' => 'Amphiprioninae',
            'fun_fact' => 'Clownfish are immune to the stings of sea anemones.',
            'image_url' => 'https://example.com/clownfish.jpg',
            'category' => 'vertebrate',
            'type' => 'fish',
            'diet' => 'omnivore',
            'habitat' => 'aquatic',
        ]);

        Animal::create([
            'name' => 'Honeybee',
            'scientific_name' => 'Apis mellifera',
            'fun_fact' => 'Honeybees communicate by dancing.',
            'image_url' => 'https://example.com/honeybee.jpg',
            'category' => 'invertebrate',
            'type' => 'arthropoda',
            'diet' => 'herbivore',
            'habitat' => 'terrestrial',
        ]);

        Animal::create([
            'name' => 'Red Kangaroo',
            'scientific_name' => 'Macropus rufus',
            'fun_fact' => 'Red kangaroos can leap over 30 feet in a single bound.',
            'image_url' => 'https://example.com/red_kangaroo.jpg',
            'category' => 'vertebrate',
            'type' => 'mammal',
            'diet' => 'herbivore',
            'habitat' => 'terrestrial',
        ]);

        Animal::create([
            'name' => 'Green Sea Turtle',
            'scientific_name' => 'Chelonia mydas',
            'fun_fact' => 'Green sea turtles can stay underwater for up to 5 hours.',
            'image_url' => 'https://example.com/green_sea_turtle.jpg',
            'category' => 'vertebrate',
            'type' => 'reptile',
            'diet' => 'herbivore',
            'habitat' => 'aquatic',
        ]);

        Animal::create([
            'name' => 'Giant Panda',
            'scientific_name' => 'Ailuropoda melanoleuca',
            'fun_fact' => 'Giant pandas spend up to 14 hours a day eating bamboo.',
            'image_url' => 'https://example.com/giant_panda.jpg',
            'category' => 'vertebrate',
            'type' => 'mammal',
            'diet' => 'herbivore',
            'habitat' => 'terrestrial',
        ]);

        Animal::create([
            'name' => 'Jellyfish',
            'scientific_name' => 'Aurelia aurita',
            'fun_fact' => 'Jellyfish have been around for over 500 million years.',
            'image_url' => 'https://example.com/jellyfish.jpg',
            'category' => 'invertebrate',
            'type' => 'cnidaria',
            'diet' => 'carnivore',
            'habitat' => 'aquatic',
        ]);

        Animal::create([
            'name' => 'Tarantula',
            'scientific_name' => 'Theraphosidae',
            'fun_fact' => 'Tarantulas can regenerate lost legs.',
            'image_url' => 'https://example.com/tarantula.jpg',
            'category' => 'invertebrate',
            'type' => 'arthropoda',
            'diet' => 'carnivore',
            'habitat' => 'terrestrial',
        ]);

        Animal::create([
            'name' => 'Giant Squid',
            'scientific_name' => 'Architeuthis dux',
            'fun_fact' => 'Giant squids have eyes the size of dinner plates.',
            'image_url' => 'https://example.com/giant_squid.jpg',
            'category' => 'invertebrate',
            'type' => 'mollusca',
            'diet' => 'carnivore',
            'habitat' => 'aquatic',
        ]);
    }
}
