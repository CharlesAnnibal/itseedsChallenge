<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name'          => uniqid("Product ",true),
            'cost'          => mt_rand(50, 500),
            'created_at'    => date('Y-m-d H-i-s')
        ]);

        DB::table('product')->insert([
            'name'          => uniqid("Caneca ",true),
            'cost'          => mt_rand(5, 50),
            'created_at'    => date('Y-m-d H-i-s')
        ]);
        DB::table('product')->insert([
            'name'          => uniqid("Roupa ",true),
            'cost'          => mt_rand(50, 500),
            'created_at'    => date('Y-m-d H-i-s')
        ]);

        DB::table('product')->insert([
            'name'          => uniqid("Chapéu ",true),
            'cost'          => mt_rand(5, 50),
            'created_at'    => date('Y-m-d H-i-s')
        ]);
    }
}
