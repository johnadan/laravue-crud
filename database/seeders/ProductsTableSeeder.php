<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create method persists fake data in db, make method does not
        // \App\Models\Product::factory()->count(10)->make(); 
        \App\Models\Product::factory()->count(10)->create(); 
    }
}
