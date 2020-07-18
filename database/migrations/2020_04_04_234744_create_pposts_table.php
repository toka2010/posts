<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pposts', function (Blueprint $table) {
            $table->bigIncrements('p_id');
            $table->string('p_title');
            $table->string('p_content');
             $table->bigInteger('p_user')->unsigned();
             $table->foreign('p_user')->references('id')->on('users')->onDelete('cascade');
             $table->bigInteger('p_cat')->unsigned(); 
             $table->foreign('p_cat')->references('cat_id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('pposts');
    }
}
