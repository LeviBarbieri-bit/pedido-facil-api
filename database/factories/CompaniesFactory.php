<?php

namespace Database\Factories\Models;

use App\Models\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompaniesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Companies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->name,
            'fantasy_name' => $this->faker->name,
            'cnpj' => '52.120.106/0001-22',
        ];
    }
}
