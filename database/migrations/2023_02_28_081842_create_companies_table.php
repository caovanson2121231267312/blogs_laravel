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
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique()->index();
            $table->string('slug')->unique()->index();
            $table->boolean('check')->index();
            $table->string('logo');
            $table->string('releases')->nullable();
            $table->string('address')->nullable();
            $table->string('hotline')->nullable();
            $table->json('banner')->nullable();
            $table->longText('description')->nullable();
            $table->text('link_website')->nullable();
            $table->text('link_youtube')->nullable();
            $table->date('link_facebook');

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
        Schema::dropIfExists('companies');
    }
};
