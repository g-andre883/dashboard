<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskCategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $col1 = collect([1, 2, 3, 4, 5,]);
        $soft_order = $col1->reverse();



        $name = ['コーティング', '打ち合わせ', '資料作成', '面談', '営業面談'];

        $soft_order = $soft_order[rand(0, count($soft_order) - 1)];
        $name = $name[rand(0, count($name) - 1)];
        return [

            'soft_order' => $soft_order,

            'name' => $name,
        ];
    }
}
