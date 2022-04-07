<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'surname' => $this->faker->word,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'subject' => $this->faker->shuffleString,
            'body' => $this->faker->text,
            'is_read' => 0,
        ];
    }
}
