<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_texts', function (Blueprint $table) {
            $table->id();
            $table->enum('key_word',['about_us'])->nullable();
            $table->string('title')->nullable();
            $table->text('contents')->nullable();
            $table->string('logo')->nullable();
            $table->string('video')->nullable();
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
        Schema::dropIfExists('site_texts');
    }
}
