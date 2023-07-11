<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'publisher_id'=>1,
            'title'=>'Harry Potter and the Cursed Child',
            'author'=>'J.K. Rowling',
            'year'=>2016,
            'synopsis'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse aliquid nostrum soluta cupiditate. Iusto, maiores deserunt? Culpa, numquam suscipit, praesentium totam sequi obcaecati, ut qui delectus alias quos esse.',
            'image'=>'book1.webp',
        ]);
        DB::table('books')->insert([
            'publisher_id'=>2,
            'title'=>'Detective Conan Vol.100',
            'author'=>'Aoyama Gosho',
            'year'=>2022,
            'synopsis'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse aliquid nostrum soluta cupiditate. Iusto, maiores deserunt? Culpa, numquam suscipit, praesentium totam sequi obcaecati, ut qui delectus alias quos esse.',
            'image'=>'book2.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id'=>4,
            'title'=>'Super Simple Cara Praktis Kuasai Bahasa Korea',
            'author'=>'Setiawan Agung Pamungkas',
            'year'=>2017,
            'synopsis'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse aliquid nostrum soluta cupiditate. Iusto, maiores deserunt? Culpa, numquam suscipit, praesentium totam sequi obcaecati, ut qui delectus alias quos esse.',
            'image'=>'book3.jpeg',
        ]);
        DB::table('books')->insert([
            'publisher_id'=>2,
            'title'=>'Detektif Conan Vol.99',
            'author'=>'Aoyama Gosho',
            'year'=>2022,
            'synopsis'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse aliquid nostrum soluta cupiditate. Iusto, maiores deserunt? Culpa, numquam suscipit, praesentium totam sequi obcaecati, ut qui delectus alias quos esse.',
            'image'=>'book4.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id'=>1,
            'title'=>'Harry Potter and The Prisoner of Azkaban',
            'author'=>'J.K Rowling',
            'year'=>1999,
            'synopsis'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse aliquid nostrum soluta cupiditate. Iusto, maiores deserunt? Culpa, numquam suscipit, praesentium totam sequi obcaecati, ut qui delectus alias quos esse.',
            'image'=>'book5.jpg',
        ]);
        DB::table('books')->insert([
            'publisher_id'=>3,
            'title'=>'Dongeng Sebelum Tidur : Warna-warni Balon Rubi',
            'author'=>'Setiawan Agung Pamungkas',
            'year'=>2017,
            'synopsis'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse aliquid nostrum soluta cupiditate. Iusto, maiores deserunt? Culpa, numquam suscipit, praesentium totam sequi obcaecati, ut qui delectus alias quos esse.',
            'image'=>'book6.webp',
        ]);
    }
}
