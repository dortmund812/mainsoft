<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            [
                'name' => 'Bogota',
                'latitud' => '4.60971',
                'longitud' => '-74.08175'
            ],
            [
                'name' => 'Miami',
                'latitud' => '25.77427',
                'longitud' => '-80.19366'
            ],
            [
                'name' => 'Orlando',
                'latitud' => '28.53834',
                'longitud' => '-81.37924'
            ],
            [
                'name' => 'New York',
                'latitud' => '40.71427',
                'longitud' => '-74.00597'
            ]
        ]);
    }
}
