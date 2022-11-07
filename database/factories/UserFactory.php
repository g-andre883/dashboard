<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arrRes = [
            'family_name' => $this->faker->firstname(),
            'family_name_hiragana' => mb_convert_kana($this->faker->firstKanaNameMale(), "Kc"),
            'personal_name' => $this->faker->lastName(),
            'personal_name_hiragana' => mb_convert_kana($this->faker->lastKanaName(), "Kc"),
            'login_id' => $this->faker->unique()->word(),
            'email' => $this->faker->unique()->email(),
            'email_verified_at' => now(),
            'password' => Hash::make('1234'), // password
        ];
        return $arrRes;

    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
