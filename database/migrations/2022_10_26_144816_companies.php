<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Companies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('logo');
            $table->string('cover');
            $table->string('bio');
            $table->time('appointment_start_hour');
            $table->time('appointment_end_hour');
            $table->time('appointment_time');
            $table->date('business_days');
            $table->string('lat');
            $table->string('lng');
            $table->string('linkedin');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('since');
            $table->string('price_range');
            $table->rememberToken();
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
        Schema::dropIfExists('companies');
    }
}
