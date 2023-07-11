<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name'=>'Gramedia Pustaka',
            'address'=>'Jakarta Pusat',
            'phone'=>'0212928031991',
            'email'=>'gramed@gmail.com',
            'image'=>'publisher1.jfif'
        ]);
        DB::table('publishers')->insert([
            'name'=>'Erlangga',
            'address'=>'Jakarta Selatan',
            'phone'=>'02163724501',
            'email'=>'erlangga@gmail.com',
            'image'=>'publisher2.jpg',
        ]);
        DB::table('publishers')->insert([
            'name'=>'Quadra',
            'address'=>'Jakarta Selatan',
            'phone'=>'02176535124',
            'email'=>'quadra@gmail.com',
            'image'=>'publisher3.jpeg',
        ]);
        DB::table('publishers')->insert([
            'name'=>'Grasindo',
            'address'=>'Jakarta Pusat',
            'phone'=>'0215486712',
            'email'=>'grasindo@gmail.com',
            'image'=>'publisher4.png',
        ]);
    }
}
