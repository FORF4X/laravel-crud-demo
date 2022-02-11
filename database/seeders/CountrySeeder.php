<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name' => 'Georgia'
        ]);
        Country::create([
            'name' => 'USA'
        ]);
        Country::create([
            'name' => 'Canada'
        ]);
        Country::create([
            'name' => 'UK'
        ]);
        Country::create([
            'name' => 'Japan'
        ]);
    }
}
