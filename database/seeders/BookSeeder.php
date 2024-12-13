<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "title" => "Soekarno: Sebuah Biografi",
            "author" => "Adji Nugroho S.ip",
            "year" => 2019,
            "publisher" => "Roemah Soekarno",
            "city" => "Yogyakarta",
            "cover" => "public/cover.jpg",
            "bookshelf_id" => 5
        ]);
        Book::create([
            "title" => "Aku Tak Membenci Hujan",
            "author" => "Sri Puji Hartini",
            "year" => 2023,
            "publisher" => "Akad x Squad",
            "city" => "Depok",
            "cover" => "public/novel.jpg",
            "bookshelf_id" => 1
        ]);
    }
}
