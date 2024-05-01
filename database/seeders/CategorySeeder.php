<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i<15; $i++):
            $category = [
                'occupation' => Str::random(10),
                'address' => 'sabbir2dev@gmail.com',
                'excerpt' => 'I am Sabbir Hossain Shawon. I am 29 years old'
            ];

            DB::table("categories")->insert($category);

        endfor;
    }
}
