<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => fake()->name(), //Str::random(10),
            'price' => rand(1000,10000),
            'description' =>  fake()->text(100),//Str::random(20),
            'status' => ['new', 'used'][rand(0, 1)],
            'is_active' => true,
            'release_date' => now()->subDays(rand(1, 365)),
        ]);
    }
}
