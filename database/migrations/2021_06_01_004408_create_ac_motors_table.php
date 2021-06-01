<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_motors', function (Blueprint $table) {
            $table->id();
            $table->string('mfg',100)->nullable();
            $table->string('power',30)->nullable();
            $table->tinyInteger('hpkw')->nullable();
            $table->string('volts',30)->nullable();
            $table->string('amps',30)->nullable();
            $table->string('speed',20)->nullable();
            $table->string('hz',20)->nullable();
            $table->string('serial',100)->nullable();
            $table->string('model',100)->nullable();
            $table->string('cat_no',100)->nullable();
            $table->string('duty',20)->nullable();
            $table->tinyInteger('insulation_class')->nullable();
            $table->string('service_factor',20)->nullable();
            $table->tinyInteger('rotor_type')->nullable();
            $table->string('design',20)->nullable();
            $table->string('enclosure',30)->nullable();
            $table->tinyInteger('phases')->nullable();
            $table->integer('run_capacitor')->nullable();
            $table->integer('start_capacitor')->nullable();
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
        Schema::dropIfExists('ac_motors');
    }
}
