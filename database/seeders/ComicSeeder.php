<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Faker\Generator as Faker;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $new_comic = new Comic();
            $new_comic->title = $faker->words(3, true);
            $new_comic->author = $faker->name('male'|'female');
            $new_comic->description = $faker->paragraph();
            $new_comic->condition = $faker->randomElement(['good','normal','bad']);
            $new_comic->thumb = $faker->imageUrl($width = 640, $height = 480);
            $new_comic->release_date = $faker->date('Y-m-d');
            $new_comic->rare = $faker->boolean();
            $new_comic->save();
        }        
    }
}
