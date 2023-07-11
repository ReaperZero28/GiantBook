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
            'name'=>'Novel',
        ]);
        DB::table('categories')->insert([
            'name'=>'Comic',
        ]);
        DB::table('categories')->insert([
            'name'=>"Children's book",
        ]);
        DB::table('categories')->insert([
            'name'=>'Education'
        ]);
    }
}
