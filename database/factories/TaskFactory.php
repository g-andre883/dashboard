<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $user_id = [1,2,3,4,5,6];
        $task_category_id = [1,2,3,4,5,6];
        $state = [0,1,2];
        $comment = ['aaaaaaaaaaaa','ああああああああああああああ','ほげほげほげ'];

        $name = ['コーティング', '打ち合わせ', '資料作成', '面談', '営業面談'];

        $user_id = $user_id[rand(0, count($user_id) - 1)];
        $task_category_id = $task_category_id[rand(0, count($task_category_id) - 1)];
        $state = $state[rand(0, count($state) - 1)];
        $name = $name[rand(0, count($name) - 1)];
        $comment = $comment[rand(0, count($comment) - 1)];
        return [
            'user_id' => $user_id,
            'task_category_id' => $task_category_id,
            'state' => $state,
            'name' => $name,
            'comment' => $comment,
        ];

        $arrRes = [
            // 'user_id' => $this->faker->randomNumber(5, true),
            // 'task_category_id' => $this->faker->randomNumber(),
            'deadline' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 week')->format('Y-m-d'),
            // 'name' => $this->faker->name(),
            'plans_work_start_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 week')->format('Y-m-d'),
            'plans_work_completion_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 week')->format('Y-m-d'),
            'work_completion_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 week')->format('Y-m-d'),
            'work_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 week')->format('Y-m-d'),
            // 'state' => $this->faker->numberBetween(1,3),
            
        ];
        return $arrRes;

    }
}
