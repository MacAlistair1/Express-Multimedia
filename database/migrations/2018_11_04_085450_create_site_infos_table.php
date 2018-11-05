<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('logo');
            $table->string('address');
            $table->string('tel', 15);
            $table->string('email');
            $table->string('fb_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('gplus_url')->nullable();
            $table->string('insta_url')->nullable();
            $table->string('map_url', 500);
            $table->text('about_us');
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
        Schema::dropIfExists('site_infos');
    }
}
