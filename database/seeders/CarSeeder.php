<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cars = [
            [
                'name' => 'HONDA CIVIC',
            ],
            [
                'name' => 'TOYOTA ALTIS'
            ],
            [
                'name' => 'MAZDA 3'
            ],
            [
                'name' => 'SUZUKI SX4'
            ]
        ];
        foreach ($cars as $car) {
            DB::table('car')->insert(
                $car
            );
        }
    }
}
