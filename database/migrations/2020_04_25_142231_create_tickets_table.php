<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('barcode')->nullable();
            $table->text('description')->default('system_ticket');
            $table->string('inquire')->nullable();
            $table->unsignedBigInteger('opner_user_id');
            $table->enum('status', ['pending', 'solved', 'canceled'])->default('pending');
            $table->timestamps();
            $table->foreign('opner_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
