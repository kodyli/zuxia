<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAlertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userAlert', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userAccountId');
            $table->unsignedInteger('categoryId');
            $table->json('searchContext')->nullable();
            $table->timestamp('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updatedAt')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        Schema::table('userAlert',function (Blueprint $table){
            $table->foreign('userAccountId')->references('id')->on('userAccount');
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
        Schema::dropIfExists('userAlert');
    }
}
