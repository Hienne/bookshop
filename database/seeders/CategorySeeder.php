<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_name' =>  'Sách Tiếng Việt '
            ],
            [
                'category_name' =>  ' Sách Tiếng Anh'
            ],
            [
                'category_name' =>  ' Sách Văn Học'
            ],
            [
                'category_name' =>  'Sách Thiếu Nhi '
            ],
            [
                'category_name' =>  'Sách Kỹ Năng - Sống Đẹp'
            ],
            [
                'category_name' =>  'Sách Kinh Tế'
            ],
            [
                'category_name' =>  'Sách Nuôi Dạy Con'
            ],
            [
                'category_name' =>  'Sách Tham Khảo'
            ],
            [
                'category_name' =>  'Sách Giáo Khoa'
            ],
            [
                'category_name' =>  'Sách Học Ngoại Ngữ'
            ]
        ]);
    }
}
