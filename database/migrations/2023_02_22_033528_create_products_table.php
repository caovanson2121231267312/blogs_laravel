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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('title')->nullable()->index();
            $table->string('slug')->index()->unique();
            $table->string('keywords')->nullable();
            $table->text('description')->nullable();
            $table->string('video')->nullable();
            $table->integer('view')->default(0);
            $table->integer('like')->default(0);
            $table->integer('download')->default(0);
            $table->integer('type')->default(0);
            $table->string('image')->nullable();
            $table->boolean('hot')->default(0)->index();
            $table->text('link');
            $table->longText('commit');
            $table->longText('detail')->nullable();
            $table->longText('tutorial')->nullable();

            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('code_id')->unsigned()->index();
            $table->foreign('code_id')->references('id')->on('codes')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
};