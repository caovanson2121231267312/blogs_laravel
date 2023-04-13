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
        Schema::create('freelancers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->index();
            $table->string('slug')->unique()->index();
            $table->boolean('check')->index();
            $table->longText('description')->nullable();
            $table->text('skill')->nullable();
            $table->date('time_limit');
            $table->integer('work_type')->default(0);
            $table->integer('pay_type')->default(0);
            $table->integer('min_price')->default(0);
            $table->integer('max_price')->default(100000);

            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('field_id')->unsigned()->index();
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
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
        Schema::dropIfExists('freelancers');
    }
};