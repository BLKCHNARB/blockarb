<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name' => 'Business'
        ]);

        Plan::create([
            'name' => 'Standard'
        ]);

        Plan::create([
            'name' => 'Professional'
        ]);
    }
}
