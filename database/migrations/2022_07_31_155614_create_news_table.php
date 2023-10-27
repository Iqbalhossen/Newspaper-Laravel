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
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            $table->integer('userId');
            $table->integer('categoryId')->nullable();
            $table->integer('subCategoryId')->nullable();
            $table->integer('divisionId')->nullable();
            $table->integer('districtId')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('newsDetailsOne');
            $table->text('newsDetailsTwo')->nullable();
            $table->text('newsDetailsThree')->nullable();
            $table->string('imageThum');
            $table->string('image');
            $table->integer('status');
            $table->integer('fb')->nullable();
            $table->integer('sendGmail')->nullable();

 
            $table->integer('silerMain')->nullable();
            $table->integer('silderLeft')->nullable();
            $table->integer('silderRight')->nullable();
            $table->integer('category')->nullable();
            $table->integer('political')->nullable();
            $table->integer('wholeCountry')->nullable();
            $table->integer('world')->nullable();
            $table->integer('education')->nullable();
            $table->integer('medical')->nullable();
            $table->integer('fashion')->nullable();
            $table->integer('travel')->nullable();
            $table->integer('sports')->nullable();
            $table->integer('commerce')->nullable();
            $table->integer('entertainment')->nullable();
            $table->integer('lifestyle')->nullable();
            $table->integer('jobs')->nullable();
            $table->integer('Story')->nullable();
           

            $table->string('metaTitle')->nullable();
            $table->string('metaAuthor')->nullable();
            $table->string('metaKeyword')->nullable();
            $table->text('metaDescription')->nullable();
            $table->text('googleAnalytics')->nullable();
            $table->text('titlePagination')->nullable();
            $table->text('metaDescriptionPagination')->nullable();


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
        Schema::dropIfExists('news');
    }
};
