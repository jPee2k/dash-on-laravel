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
            $table->string('name', 191)->index();
            $table->string('status', 32)->default('draft');

            // template
            $table->bigInteger('template_id')->default(0);

            // meta
            $table->text('description')->nullable();
            $table->string('image_name', 191)->nullable();
            $table->text('keywords')->nullable();

            // content
            $table->string('content_title', 191);
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
