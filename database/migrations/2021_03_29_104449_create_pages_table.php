<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            // main
            $table->id();
            $table->string('name');
            $table->string('status')->default('draft');

            // meta
            $table->text('description')->nullable();
            $table->string('image_name')->nullable();
            $table->text('keywords')->nullable();

            // content
            $table->string('content_title');
            $table->text('content_data')->nullable();

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
        Schema::dropIfExists('pages');
    }
}
