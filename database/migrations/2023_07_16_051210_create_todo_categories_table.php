<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('todo_categories', function (Blueprint $table) {
            $table->id('CategoryID');
            $table->string('CategoryName');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('todo_categories');
    }
}
