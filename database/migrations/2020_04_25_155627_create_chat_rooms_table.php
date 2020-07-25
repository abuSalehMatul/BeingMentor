<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('small_id_participant');
            $table->unsignedBigInteger('big_id_participant');
            $table->text('tickets_json')->nullable();
            $table->enum('status', ['open', 'closed'])->default('closed');
            $table->unsignedBigInteger('initiator')->nullable();
            $table->timestamps();
            $table->foreign('small_id_participant')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('big_id_participant')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_rooms');
    }
}
