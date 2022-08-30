<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('settings')->nullable();
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('instruments_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sections_id');
            $table->foreign('sections_id')
                ->references('id')
                ->on('sections')
                ->onDelete('cascade');

            $table->unsignedBigInteger('instruments_id');
            $table->foreign('instruments_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');
        });

        Schema::create('users_sections', function (Blueprint $table) {
            $table->id();

            $table->boolean('blocked');
            $table->string('blocked_reason')->nullable();

            $table->boolean('can_avoid_spam');
            $table->boolean('can_block');
            $table->boolean('can_hide');
            $table->boolean('can_see_hidden');

            $table->string('status')->default();
            $table->text('description')->nullable();

            $table->timestamps();

            $table->unsignedBigInteger('sections_id');
            $table->foreign('sections_id')
                ->references('id')
                ->on('sections')
                ->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::create('chat_sections_settings', function (Blueprint $table) {
            $table->id();


            $table->boolean('blocked')->default(0);
            $table->string('blocked_reason')->nullable();


            $table->timestamp('date');

            $table->string('thema')->default('dark-warning');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->unsignedBigInteger('sections_id');
            $table->foreign('sections_id')
                ->references('id')
                ->on('sections')
                ->onDelete('cascade');
        });

        Schema::create('chat_message_sections', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->boolean('hidden');
            $table->time('time');
            $table->string('status')->default();
            $table->timestamps();
            $table->unsignedBigInteger('sections_id');
            $table->foreign('sections_id')
                ->references('id')
                ->on('sections')
                ->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::create('announcements_sections', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->string('status')->default();
            $table->timestamps();
            $table->unsignedBigInteger('sections_id');
            $table->foreign('sections_id')
                ->references('id')
                ->on('sections')
                ->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::create('schedule_list_sections', function (Blueprint $table) {
            $table->id();
            $table->string('dayofweek');
            $table->string('start_time');
            $table->string('end_time');
            $table->text('text');
            $table->string('status')->default();
            $table->timestamps();
            $table->unsignedBigInteger('sections_id');
            $table->foreign('sections_id')
                ->references('id')
                ->on('sections')
                ->onDelete('cascade');
        });

        Schema::create('repertoire_list_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('composer')->nullable();
            $table->integer('parent_id')->default(0);
            $table->string('status')->default();
            $table->timestamps();
            $table->unsignedBigInteger('sections_id');
            $table->foreign('sections_id')
                ->references('id')
                ->on('sections')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_sections_settings');
        Schema::dropIfExists('chat_message_sections');
        Schema::dropIfExists('announcements_sections');
        Schema::dropIfExists('schedule_list_sections');
        Schema::dropIfExists('repertoire_list_sections');
        Schema::dropIfExists('users_sections');
        Schema::dropIfExists('instruments_sections');
        Schema::dropIfExists('sections');
    }
}
