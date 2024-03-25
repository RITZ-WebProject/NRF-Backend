<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
{
    DB::table('countries')->insert([
        ['name' => 'Brunei'],
        ['name' => 'Cambodia'],
        ['name' => 'Indonesia'],
        ['name' => 'Laos'],
        ['name' => 'Malaysia'],
        ['name' => 'Myanmar'],
        ['name' => 'Philippines'],
        ['name' => 'Singapore'],
        ['name' => 'Thailand'],
        ['name' => 'Vietnam'],
        ['name' => 'East Timor'],
    ]);
}

}
