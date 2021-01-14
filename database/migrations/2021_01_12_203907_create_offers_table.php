<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user_designer')->unsigned();
            $table->bigInteger('id_user_project_owner')->unsigned();
            $table->foreign('id_user_designer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_user_project_owner')->references('id')->on('skills')->onDelete('cascade');
            $table->longText('name')->nullable();
            $table->longText('desc')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('days')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('offers');
    }
}
