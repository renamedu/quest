<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quest_users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('quest_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();
            $table->softDeletes();

            $table->index('quest_id', 'quest_user_quest_idx');
            $table->index('user_id', 'quest_user_user_idx');

            $table->foreign('quest_id', 'quest_user_quest_fk')->on('quests')->references('id');
            $table->foreign('user_id', 'quest_user_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quest_users');
    }
}
