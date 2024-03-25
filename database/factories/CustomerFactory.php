<?php

namespace Database\Factories;

use App\Http\Controllers\CustomersController;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => Hash::make('12345678'),
            // 'address' => $this->faker->address(),
            'phone_primary' => $this->faker->phoneNumber(),
            'active_status' => 'inactive'
            // 'phone_secondary' => $this->faker->phoneNumber(),
            // 'division_id' => rand(1,7),
            // 'district_id' => rand(1,14),
            // 'township_id' => rand(1,14),
        ];
    }
}
