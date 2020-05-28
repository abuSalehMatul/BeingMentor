<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('mobile1')->nullable();
            $table->string('address')->nullable();
          //  $table->longText('about_us')->nullable();
          //  $table->longText('term_policy')->nullable();
          //  $table->longText('how_it_works')->nullable();
            $table->longText('footer_quote')->nullable();
           // $table->text('quote_title1')->nullable();
           // $table->text('how_it_work_image_one')->nullable();
          //  $table->text('how_it_work_image_two')->nullable();
          //  $table->text('how_it_work_image_three')->nullable();
           // $table->text('quote_title2')->nullable();
            $table->longText('quote_description1')->nullable();
            $table->longText('quote_description2')->nullable();
            $table->longText('index_description')->nullable();
            $table->longText('how_it_work_description1')->nullable();
            $table->longText('how_it_work_description2')->nullable();
            $table->longText('how_it_work_description3')->nullable();
            $table->longText('why_us_description')->nullable();
            $table->text('how_it_work_title1')->nullable();
            $table->text('how_it_work_title2')->nullable();
            $table->text('how_it_work_title3')->nullable();
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
        Schema::dropIfExists('websites');
    }
}
