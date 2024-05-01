<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $faker = Factory::create();
        for($i = 0; $i<5; $i++):
            $posts = [
                'firstname' => $faker->name(),
                'lastname' => $faker->name(),
                'email_address' => $faker->safeEmail(),
                'content' => $faker->text(),
                'excerpt' => $faker->text(),
                'thumbnail'=> $faker->imageUrl(1000,600)
            ];

            DB::table("posts")->insert($posts);

        endfor;
    }
}
