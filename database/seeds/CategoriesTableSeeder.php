<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::insert([
            ['id' => '1', 'name' => 'Electronics', 'description' => '', 'main' => true, 'parent_id' => null],
            ['id' => '2', 'name' => 'Laptops', 'description' => '', 'main' => false, 'parent_id' => '1'],
            ['id' => '3', 'name' => 'Smart Phones', 'description' => '', 'main' => false, 'parent_id' => '1'],
            ['id' => '4', 'name' => 'Cameras', 'description' => '', 'main' => false, 'parent_id' => '1'],
            ['id' => '5', 'name' => 'Accessories', 'description' => '', 'main' => false, 'parent_id' => '1'],
        ]);
    }
}
