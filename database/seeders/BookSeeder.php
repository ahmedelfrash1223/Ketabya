<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'user_id' => '1',
            'author_name' =>'احمد مصطفي' ,
            'book_title' => 'اني سميتها مريم',
            'category_id' => '1',
            'description' =>'اني سميتها مريم' ,
            'cover_image' => '1719010339_téléchargement (1)_4.jpg',
            'book_file' =>'1719010339_Kotobati - أحلام في المقابر.pdf',
            'pledge_file' =>'1719010339_pledge (1).jpg' ,
            'status' => 'null',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
