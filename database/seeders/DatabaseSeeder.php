<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Customer::factory(10)->create();
        \App\Models\User::factory()->create([
            "username" => "superadmin",
            "password" => '$2y$10$FZzxg6lkckVqiz6/dZShjeJ9sZi/ZiXBqBwMrAgdABnLDJaqleE96',
            "user_roles" => 'admin',
        ]);
        \App\Models\Category::factory(1)->create();
        $this->call(TblColorTableSeeder::class);
        $this->call(TblDistrictsTableSeeder::class);
        $this->call(TblDivisionsTableSeeder::class);
        $this->call(TblTownshipsTableSeeder::class);
        $this->call(TblSizeChartTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(CountrySeeder::class);
    }
}
