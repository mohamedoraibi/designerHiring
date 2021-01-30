<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biddings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user_designer')->unsigned();
            $table->bigInteger('id_user_project_owner')->unsigned();
            $table->bigInteger('id_project')->unsigned();
            $table->foreign('id_user_designer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_user_project_owner')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('price')->nullable();
            $table->bigInteger('days')->nullable();
            $table->boolean('status')->nullable();
            $table->longText('notes')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('biddings');
    }
}
