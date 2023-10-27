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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('favicon');
            $table->string('title');
            $table->string('logo');
            $table->text('about');
            $table->string('address');
            $table->integer('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('twitter');
            $table->string('pinterest');
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
        Schema::dropIfExists('settings');
    }
};
