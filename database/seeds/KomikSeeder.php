<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Komik;

class KomikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Komik::truncate();
        $faker = Faker::create();
        // membuat 9 record dummy
        for ($i = 0; $i < 9; $i++) {
            Komik::create([
                'judul_komik' => $faker->word,
                'sinopsis' =>  $faker->text,
                'author' => $faker->name,
                'status' => 'ongoing',
                'tahun' => $faker->year,
                'cover' => $faker->image($dir = 'public/data_gambar/cover', $width = 480, $height = 640, null, false),
            ]);
        }
    }
}
