<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLipsealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lipseals', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->double('shaft')->nullable();
            $table->double('bore')->nullable();
            $table->double('width')->nullable();
          

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
        Schema::dropIfExists('lipseals');
    }
}
