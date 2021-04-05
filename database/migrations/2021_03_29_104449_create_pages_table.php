<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

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
            $table->string('slug');
            $table->string('status')->default('draft');

            // meta
            $table->string('url');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image_name')->nullable();
            $table->text('keywords')->nullable();
            $table->unique(['name', 'slug']);
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
