<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for($i = 0; $i<5; $i++):
            $posts = [
                'title' => $faker->title(),
                'thumbnail' => $faker->imageUrl(1000,80),
                'content' => $faker->text(),
                'author' => $faker->text()
            ];
            DB::table("datas")->insert($posts);

        endfor;
    }
}
