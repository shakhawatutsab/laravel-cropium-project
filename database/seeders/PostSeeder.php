<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;
use Illuminate\Support\Carbon;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $faker = Factory::create();
        for($i = 0; $i<10; $i++):
            $posts = [
                'firstname' => $faker->FirstName(),
                'lastname' => $faker->lastName(),
                'email_address' => $faker->safeEmail(),
                'content' => $faker->text(),
                'excerpt' => $faker->text(),
                'thumbnail'=> $faker->imageUrl(1000,600),
                'title' => $faker->title(),
                'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ];

            DB::table("posts")->insert($posts);

        endfor;
    }
}
