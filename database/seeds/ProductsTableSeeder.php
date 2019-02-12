<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::insert([
            ['id' => '1', 'name' => 'HP ProBook', 'description' => 'ProBook', 'image' => '', 'regular_price' => '750', 'sale_price' => '700', 'category_id' => '2', 'user_id' => '1'],
        ]);
    }
}
