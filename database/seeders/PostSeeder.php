<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i = 0; $i<5; $i++):
            $posts = [
                'firstname' => 'Sabbir Hossain',
                'lastname' => Str::random(10),
                'email_address' => 'sabbir2dev@gmail.com',
                'content' => 'I am a professional wordpress developer',
                'excerpt' => 'I am Sabbir Hossain Shawon. I am 29 years old'
            ];

            DB::table("posts")->insert($posts);

        endfor;
    }
}
