<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
   /**
    * Run the migrations.
    */
   public function up()
   {
       Schema::create('animals', function (Blueprint $table) {
           $table->id();
           $table->string('name');
           $table->string('scientific_name')->nullable();
           $table->text('description')->nullable();
           $table->string('image_url')->nullable();
           $table->enum('category', ['vertebrate', 'invertebrate']);
           $table->enum('type', ['mammal', 'bird', 'reptile', 'amphibian', 'fish',
               'Cnidaria', 'Arthropoda', 'Mollusca', 'Annelida', 'Echinodermata']);
           $table->enum('diet', ['Herbivore', 'Carnivore', 'Omnivore']);
           $table->enum('habitat', ['Terrestrial', 'Aquatic', 'Arboreal']);
           $table->timestamps();
       });
   }


   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
       Schema::dropIfExists('animals');
   }
};



