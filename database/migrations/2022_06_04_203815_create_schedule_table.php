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
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamp('date')->nullable();
            $table->time('time_from');
            $table->time('time_to');
            $table->string('rehearsaltype');
            $table->string('shifttype');
            $table->text('description');
            $table->string('place');
            $table->text('program');
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('reason');
            $table->timestamps();
        });

        Schema::create('schedule_program', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('program');
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')
                ->references('id')
                ->on('schedule')
                ->onDelete('cascade');
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
        Schema::dropIfExists('schedule_program');
        Schema::dropIfExists('schedule');
    }
};
