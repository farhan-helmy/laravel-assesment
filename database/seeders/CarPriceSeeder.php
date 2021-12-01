<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 1; $x <= 5; $x++) {
            $price = $x - 1;
            DB::table('car_price')->insert(
                [
                    ['car_id' => 1, 'year'=> '201'.$x, 'price' => '12'.$price.'000.00']
                ]
            );
        }
        for ($x = 1; $x <= 5; $x++) {
            $price = $x - 1;
            DB::table('car_price')->insert(
                [
                    ['car_id' => 2, 'year'=> '201'.$x, 'price' => '13'.$price.'000.00']
                ]
            );
        }
        for ($x = 1; $x <= 5; $x++) {
            $price = $x - 1;
            DB::table('car_price')->insert(
                [
                    ['car_id' => 3, 'year'=> '201'.$x, 'price' => '11'.$price.'000.00']
                ]
            );
        }
        for ($x = 1; $x <= 5; $x++) {
            $price = $x - 1;
            DB::table('car_price')->insert(
                [
                    ['car_id' => 4, 'year'=> '201'.$x, 'price' => '90'.$price.'000.00']
                ]
            );
        }
        
    }
}
