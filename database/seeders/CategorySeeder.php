<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = \Faker\Factory::create();
        for($i = 0; $i<5; $i++):
            $category = [
                'occupation' => $faker->title(10),
                'address' => $faker->freeEmail(),
                'excerpt' => $faker->paragraph()
            ];

            DB::table("categories")->insert($category);

        endfor;
    }
}
