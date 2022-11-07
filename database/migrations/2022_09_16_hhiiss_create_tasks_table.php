<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('task_category_id');
            $table->timestamp('deadline');
            $table->string('name');
            $table->timestamp('plans_work_start_date')->nullable();
            $table->timestamp('plans_work_completion_date')->nullable();
            $table->timestamp('work_start_date')->nullable();
            $table->timestamp('work_completion_date')->nullable();
            $table->string('work_date')->nullable();
            $table->smallInteger('state');
            $table->text('comment')->comment('コメント')->nullable();
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
