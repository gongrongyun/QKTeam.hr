<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_message', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birthday');
            $table->string('studentId');
            $table->string('college');
            $table->string('profession');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('qq');
            $table->boolean('gender');
            $table->text('selfIntroduction')->nullable();
            $table->string('blog')->nullable();
            $table->string('github')->nullable();
            $table->string('skills')->nullable();
            $table->text('elseSkills')->nullable();
            $table->text('expectation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_message');
    }
}
