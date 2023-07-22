<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('todo_details', function (Blueprint $table) {
            $table->id('TodoID');
            $table->string('Title');
            $table->text('Content');
            $table->date('DueDate')->nullable();
            $table->unsignedBigInteger('CategoryID');
            $table->timestamps();

            $table->foreign('CategoryID')->references('CategoryID')->on('todo_categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('todo_details');
    }
}
