<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['product_id' => 418911, 'name' => 'Automation ToolKit', 'funnel' => 'FE'],

            ['product_id' => 418983, 'name' => 'Automation ToolKit Bundle', 'funnel' => 'Bundle'],

            ['product_id' => 418985, 'name' => 'Automation ToolKit Fast-Pass', 'funnel' => 'OTO1'],
            ['product_id' => 418987, 'name' => 'Downsell', 'funnel' => 'OTO1'],

            ['product_id' => 418989, 'name' => 'Automation ToolKit Unlimited', 'funnel' => 'OTO2'],
            ['product_id' => 418991, 'name' => 'Downsell', 'funnel' => 'OTO2'],

            ['product_id' => 418993, 'name' => 'Automation ToolKit Sales Pages Setup', 'funnel' => 'OTO3'],
            ['product_id' => 418995, 'name' => 'Downsell', 'funnel' => 'OTO3'],

            ['product_id' => 418997, 'name' => 'Automation ToolKit Unlimited Traffic', 'funnel' => 'OTO4'],
            ['product_id' => 418999, 'name' => 'Downsell', 'funnel' => 'OTO4'],

            ['product_id' => 419001, 'name' => 'Automation ToolKit 10 Agency Website Setup', 'funnel' => 'OTO5'],
            ['product_id' => 419003, 'name' => 'Downsell', 'funnel' => 'OTO5'],

            ['product_id' => 419005, 'name' => 'Automation ToolKit Reseller', 'funnel' => 'OTO6'],
            ['product_id' => 419007, 'name' => 'Downsell', 'funnel' => 'OTO6'],

            ['product_id' => 419009, 'name' => 'Automation ToolKit Affiliate Marketing Course', 'funnel' => 'OTO7'],
            ['product_id' => 419011, 'name' => 'Downsell', 'funnel' => 'OTO7'],

            ['product_id' => 419015, 'name' => 'Automation ToolKit 8-Week Coaching Program', 'funnel' => 'OTO8'],
        ];



        foreach ($products as $product) {
            Product::firstOrCreate(
                ['product_id' => $product['product_id']], // Check for existence by product_id
                ['name' => $product['name'], 'funnel' => $product['funnel']] // Data to create if product_id doesn't exist
            );
        }
    }
}
