<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('project_id');
            $table->string('subtitle')->nullable();
            $table->string('img')->nullable();
            $table->longText('para_1');
            $table->longText('para_2')->nullable();
            $table->longText('para_3')->nullable();
            $table->longText('para_4')->nullable();
            $table->longText('para_5')->nullable();
            $table->longText('para_6')->nullable();
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
