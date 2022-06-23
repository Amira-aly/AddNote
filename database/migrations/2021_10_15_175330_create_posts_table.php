<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title');
            $table->text('content');
            $table->date('date');
            $table->time('time');
            $table->foreignId('user_id')->constrained();
        });
    }


    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
