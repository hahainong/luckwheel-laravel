<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {
            $table->id();
            $table->string("receiver_name")->nullable();
            $table->string("bank_number")->nullable();
            $table->string('bank_name')->nullable();
            $table->string('reward')->nullable();
            $table->unsignedBigInteger('sender_id');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('sender_id')->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rewards', function(Blueprint $table) {
            $table->dropForeign(['sender_id']);
            $table->dropIfExists();
        });
    }
}
