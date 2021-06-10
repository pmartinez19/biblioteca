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
        Schema::create('PRESTECS', function (Blueprint $table) {
            $table->id();
            $table->timestamp("data");
            $table->boolean("disponible")->default(0);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('USERS')->onDelete("cascade");
            $table->unsignedBigInteger('id_llibre');
            $table->foreign('id_llibre')->references('id')->on('LLIBRES')->onDelete("cascade");
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
