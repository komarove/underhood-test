<?php

namespace Admin\UnderhoodTestLocal\database\seeds;

use Admin\UnderhoodTestLocal\Models\PriceLog;
use Admin\UnderhoodTestLocal\Models\Product;
use Illuminate\Database\Capsule\Manager as Capsule;

class SeedDatabase
{
    /**
     * Seed the database with sample data.
     *
     * @return void
     */
    public static function run(): void
    {
        $products = [
            ['date' => '2020-01-01', 'product_id' => 1, 'quantity' => 500],
            ['date' => '2020-01-01', 'product_id' => 2, 'quantity' => 3000],
            ['date' => '2020-01-01', 'product_id' => 3, 'quantity' => 25],
            ['date' => '2020-01-02', 'product_id' => 1, 'quantity' => 450],
            ['date' => '2020-01-02', 'product_id' => 2, 'quantity' => 2500],
            ['date' => '2020-01-02', 'product_id' => 3, 'quantity' => 23],
            ['date' => '2020-01-03', 'product_id' => 1, 'quantity' => 311],
            ['date' => '2020-01-03', 'product_id' => 2, 'quantity' => 970],
            ['date' => '2020-01-03', 'product_id' => 3, 'quantity' => 20],
            ['date' => '2020-01-04', 'product_id' => 1, 'quantity' => 1000],
            ['date' => '2020-01-04', 'product_id' => 2, 'quantity' => 10000],
            ['date' => '2020-01-04', 'product_id' => 3, 'quantity' => 50],
            ['date' => '2020-01-05', 'product_id' => 1, 'quantity' => 632],
            ['date' => '2020-01-05', 'product_id' => 2, 'quantity' => 7868],
            ['date' => '2020-01-05', 'product_id' => 3, 'quantity' => 39],
            ['date' => '2020-01-06', 'product_id' => 1, 'quantity' => 632],
            ['date' => '2020-01-06', 'product_id' => 2, 'quantity' => 7868],
            ['date' => '2020-01-06', 'product_id' => 3, 'quantity' => 39],
            ['date' => '2020-01-07', 'product_id' => 1, 'quantity' => 737],
            ['date' => '2020-01-07', 'product_id' => 2, 'quantity' => 6999],
            ['date' => '2020-01-07', 'product_id' => 3, 'quantity' => 37],
            ['date' => '2020-01-08', 'product_id' => 1, 'quantity' => 590],
            ['date' => '2020-01-08', 'product_id' => 2, 'quantity' => 4500],
            ['date' => '2020-01-08', 'product_id' => 3, 'quantity' => 29],
            ['date' => '2020-01-09', 'product_id' => 1, 'quantity' => 311],
            ['date' => '2020-01-09', 'product_id' => 2, 'quantity' => 970],
            ['date' => '2020-01-09', 'product_id' => 3, 'quantity' => 20],
            ['date' => '2020-01-10', 'product_id' => 1, 'quantity' => 1000],
            ['date' => '2020-01-10', 'product_id' => 2, 'quantity' => 10000],
            ['date' => '2020-01-10', 'product_id' => 3, 'quantity' => 50],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        $priceLogs = [
            ['date' => '2019-12-29', 'product_id' => 1, 'price' => 30],
            ['date' => '2019-11-01', 'product_id' => 2, 'price' => 10],
            ['date' => '2019-01-01', 'product_id' => 3, 'price' => 750],
            ['date' => '2020-01-03', 'product_id' => 1, 'price' => 33],
            ['date' => '2020-01-04', 'product_id' => 1, 'price' => 32],
            ['date' => '2020-01-02', 'product_id' => 2, 'price' => 17],
            ['date' => '2020-01-09', 'product_id' => 2, 'price' => 20],
            ['date' => '2020-01-05', 'product_id' => 3, 'price' => 699],
        ];

        foreach ($priceLogs as $priceLog) {
            PriceLog::create($priceLog);
        }
    }
}