<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i=0; $i<20; $i++){
            DB::table('books')->insert([
                'title' => fake()->text(25),
                'thumbnail' => 'https://bookbuy.vn/Res/Images/Product/doi-song-hanh-phuc_133570_1.jpg',
                'author' =>  fake()->name(),
                'publisher' =>  fake()->text(50),
                'publication' =>  fake()->date(), 
                'price' => rand(10, 200),
                'quantity' => rand(0, 50),
                'category_id' => rand(1,5),
            ]);
        }
    }
}
