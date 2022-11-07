<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' =>  'required',
            'task_category_id' => 'required',
            'deadline' => 'required',
            'name' => 'required',
            'plans_work_start_date' => 'required',
            'plans_work_completion_date' => 'required',
            'state' =>  'required',
            'comment' => 'required',
        ];
    }
}


// $table->id();
// $table->bigInteger('user_id');
// $table->bigInteger('task_category_id');
// $table->timestamp('deadline');
// $table->string('name');
// $table->timestamp('plans_work_start_date')->nullable();
// $table->timestamp('plans_work_completion_date')->nullable();
// $table->timestamp('work_start_date')->nullable();
// $table->timestamp('work_completion_date')->nullable();
// $table->string('work_date')->nullable();
// $table->smallInteger('state');
// $table->softDeletes();
// $table->timestamps();
