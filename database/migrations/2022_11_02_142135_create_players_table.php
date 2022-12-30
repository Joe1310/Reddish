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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string("alias")->unique();
            $table->integer("position");
            $table->enum("rank", ["immortal", "divine", "ancient", "legend",
             "archon", "crusader", "guardian", "herald", "uncalibrated"]);
            $table->string("country");
            $table->string("profile_picture")->default("/profile_pictures/default.png");
            $table->bigInteger("user_id")->unsigned();
            $table->timestamps();
    
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};
