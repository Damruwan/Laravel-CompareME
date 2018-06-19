<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Phone & Tablets', 'Laptops', 'Smart watch'];
        foreach ($categories as $key => $value) {
        	Category::create([
        		'name' => $value
        	]);
        }
    }
}
