<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Product::factory()
            //->times(50)
            //->hasPosts(1)
            //->create();
            Product::factory()->count(50)->create();
    }
}
