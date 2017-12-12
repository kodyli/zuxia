<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userSubscription', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userAccountId');
            $table->unsignedInteger('schoolId');
            $table->boolean('isPrimary');
            $table->timestamp('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updatedAt')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        Schema::table('userSubscription',function (Blueprint $table){
            $table->foreign('schoolId')->references('id')->on('school');
            $table->foreign('userAccountId')->references('id')->on('userAccount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userSubscription');
    }
}
