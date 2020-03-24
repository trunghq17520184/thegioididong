<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pro_name')->unique();
            $table->string('pro_avatar')->nullable();
            $table->string('pro_slug')->index();
            $table->tinyInteger('pro_active')->default(1)->index();
            $table->integer('pro_stock')->default(0)->index();
            $table->integer('pro_price')->default(0)->index();
            $table->tinyInteger('pro_hot')->default(0)->index();
            $table->integer('pro_view')->nullable();
            $table->integer('pro_category_id')->nullable();
            $table->string('pro_title_seo')->nullable();
            $table->string('pro_description_seo')->nullable();
            $table->string('pro_keyword_seo')->nullable();
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
