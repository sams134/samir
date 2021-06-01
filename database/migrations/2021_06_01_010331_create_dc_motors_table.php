<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDcMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dc_motors', function (Blueprint $table) {
            $table->id();
            $table->string('mfg',100)->nullable();
            $table->string('power',30)->nullable();
            $table->tinyInteger('hpkw')->nullable();
            $table->string('speed',20)->nullable();
            $table->string('volts_armature',30)->nullable();
            $table->string('amps_armature',30)->nullable();
            $table->string('volts_field',30)->nullable();
            $table->string('amps_field',30)->nullable();
            $table->tinyInteger('connection_type',30)->nullable();
            $table->tinyInteger('insulation_class')->nullable();
            $table->string('serial',100)->nullable();
            $table->string('model',100)->nullable();
            
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
        Schema::dropIfExists('dc_motors');
    }
}
