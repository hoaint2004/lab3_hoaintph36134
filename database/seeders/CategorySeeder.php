<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Sách Kinh Tế'],
            ['name' => 'Sách Chuyên Ngành' ],
            ['name' => 'Sách Giáo Khoa - Giáo Trình'],
            ['name' => 'Sách Tin Học Ngoại Ngữ'],
            ['name' => 'Sách Văn Học Trong Nước' ]  
        ]);
    }
}
