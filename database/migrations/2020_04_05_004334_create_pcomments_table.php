<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcomments', function (Blueprint $table) {
            $table->bigIncrements('com_id');
            $table->string('com_content');
            $table->bigInteger('com_user')->unsigned();
             $table->foreign('com_user')->references('id')->on('users')->onDelete('cascade');
             $table->bigInteger('com_post')->unsigned(); 
            $table->foreign('com_post')->references('p_id')->on('pposts')->onDelete('cascade');

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
        Schema::dropIfExists('pcomments');
    }
}
