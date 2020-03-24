<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('post_name')->unique();
            $table->string('post_avatar')->nullable();
            $table->string('post_slug')->index();
            $table->tinyInteger('post_active')->default(1)->index();
            $table->tinyInteger('post_hot')->default(0)->index();
            $table->integer('post_view')->nullable();
            $table->integer('post_cate_id')->nullable();
            $table->string('post_title_seo')->nullable();
            $table->string('post_description_seo')->nullable();
            $table->string('post_keyword_seo')->nullable();
            $table->text('post_content')->nullable();
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
        //
    }
}
