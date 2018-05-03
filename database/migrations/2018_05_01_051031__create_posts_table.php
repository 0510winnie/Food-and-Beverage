<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('posts' ,function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('slug')->unique();
      $table->string('cover_image');
      // 2 things happen, save the name to db so we can 
      // find out later on, second, save the actual file
      // so it knows where to look for it.
      $table->longText('content');
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
      Schema::dropIfExists('posts');
    }
}
