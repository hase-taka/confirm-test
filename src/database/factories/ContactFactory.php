<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastName = $this->faker->lastName;
        $firstName = $this->faker->firstName;
        $gender = $firstName === '男'?'1':'2';

        return [
            'category_id' => $this->faker->numberBetween(1,5),
            'last_name' => $lastName,
            'first_name' => $firstName,
            'gender' => $this->faker->numberBetween(1,3),
            'email' => $this->faker->safeEmail,
            'tel' => $this->faker->phoneNumber(),
            'address' => $this->faker->postcode,
            'address'=> $this->faker->address,
            'building' => $this->faker->secondaryAddress,
            'detail' => $this->faker->realText($maxNbChars = 120),
            'created_at' => $this->faker->date('Y-m-d H:i:s', 'now'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s', 'now'),
        ];
    }
}
