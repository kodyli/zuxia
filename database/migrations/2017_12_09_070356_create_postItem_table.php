<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postItem', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('categoryId');
            $table->string('name',255);
            $table->json('details');
            $table->boolean('isActive');
            $table->decimal('price',7,2);
            $table->boolean('isPriceNegotiable');
            $table->unsignedInteger('postId');
            $table->timestamp('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updatedAt')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        Schema::table('postItem',function (Blueprint $table){
            $table->foreign('postId')->references('id')->on('post');
            $table->foreign('categoryId')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postItem');
    }
}
