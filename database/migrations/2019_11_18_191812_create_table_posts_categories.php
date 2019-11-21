<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePostsCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Better
         Schema::dropIfExists('posts_categories');
         Schema::create('posts_categories', function (Blueprint $table) {
             $table->unsignedBigInteger('post_id');
             $table->unsignedBigInteger('category_id');
             // Esse código fez com que fosse possível realizar o delete cascade!! - Ajuda Arthur
             $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
             $table->foreign('category_id')->references('id')->on('categories');
             });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_categories');
    }
}
