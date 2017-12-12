<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userAccount', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userName',255);
            $table->string('password',255);
            $table->string('email',255);
            $table->unsignedInteger('userId');
            $table->timestamp('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updatedAt')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        Schema::table('userAccount',function (Blueprint $table){
            $table->foreign('userId')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userAccount');
    }
}
