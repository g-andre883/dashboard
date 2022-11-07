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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('family_name');
            $table->string('family_name_hiragana');
            $table->string('personal_name');
            $table->string('personal_name_hiragana');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('login_id')->unique();
            $table->string('password');
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
};
