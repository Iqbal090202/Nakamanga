<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::truncate();
        $faker = Faker::create();
        // membuat 9 record dummy
        for ($i = 0; $i < 4; $i++) {
            Banner::create([
                'nama_banner' => $faker->image($dir = 'public/data_gambar/banner', $width = 640, $height = 380, null, false)
            ]);
        }
    }
}
