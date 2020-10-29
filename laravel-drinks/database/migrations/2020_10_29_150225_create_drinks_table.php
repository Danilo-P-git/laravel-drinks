<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->unique();
            $table->float('gradation', 3,1)->default(0);
            $table->string('tipology', 20);
            $table->string('glass', 20);
            $table->text('ingredients');
            $table->float('price', 5,2);
            $table->string('origin', 20);
            $table->year('year');
            $table->tinyInteger('difficulty');
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
        Schema::dropIfExists('drinks');
    }
}
