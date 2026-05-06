<?php

namespace Database\Seeders;
use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'name' => 'PT Sumber Abadi',
            'phone' => '081234567890',
            'address' => 'Palembang'
        ]);
        Supplier::create([
            'name' => 'PT Sumber Jaya',
            'phone' => '08987654321',
            'address' => 'Palembang'
        ]);
        Supplier::create([
            'name' => 'PT Rezeki Jaya Abadi',
            'phone' => '081223334444',
            'address' => 'Palembang'
        ]);



    }
}
