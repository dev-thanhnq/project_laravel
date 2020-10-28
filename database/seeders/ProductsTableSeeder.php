<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        for ($i = 1; $i <= 20; $i++) {
            DB::table('products')->insert([
                'name' => 'Sản phẩm ' . $i,
                'slug' => 'san-pham-' . $i,
                'origin_price' => 100000,
                'sale_price' => 90000,
                'discount_percent' => 10,
                'content' => 'sản phẩm test',
                'author_id' => 0,
                'publishing_company_id' => 0,
                'pages_count' => 0,
                'category_id' => 0,
                'status' => 0,
                'rate' => 0
            ]);
        }
    }
}
