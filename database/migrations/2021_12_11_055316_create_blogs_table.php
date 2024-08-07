<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('Small_Image')->nullable();
            $table->string('Big_Image')->nullable();
            $table->string('en_Title')->nullable();
            $table->text('en_Description_One')->nullable();
            $table->text('en_Description_Two')->nullable();

            $table->string('fr_Title')->nullable();
            $table->text('fr_Description_One')->nullable();
            $table->text('fr_Description_Two')->nullable();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('blogs');
    }
}
