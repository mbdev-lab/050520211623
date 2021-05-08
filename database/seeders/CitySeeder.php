<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::factory()
            ->count(10)
            ->create();
    }
}
