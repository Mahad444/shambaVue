<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Crop::create([
        'name' => 'Onions',
        'desc' => 'Fresh from the farm, can stay up to two weeks',
        'type'=> 'Buld onion'
         ]);
    }
}
