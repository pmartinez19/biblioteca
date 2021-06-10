<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestecs', function (Blueprint $table) {
            $table->id();
            $table->timestamp("data");
            $table->boolean("retornat")->default(0);
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete("cascade");
            $table->unsignedBigInteger('llibres_id');
            $table->foreign('llibres_id')->references('id')->on('llibres')->onDelete("cascade");
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
        Schema::dropIfExists('prestecs');
    }
}
