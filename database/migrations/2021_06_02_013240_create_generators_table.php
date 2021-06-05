<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generators', function (Blueprint $table) {
            $table->id();
            $table->string('mfg',100)->nullable();
            $table->string('power',30)->nullable();
            $table->tinyInteger('kwkva')->nullable();
            $table->string('serial',100)->nullable();
            $table->string('model',100)->nullable();
            $table->string('volts',30)->nullable();
            $table->string('amps',30)->nullable();
            $table->string('speed',20)->nullable();
            $table->string('hz',20)->nullable();
            $table->tinyInteger('generator_type')->nullable();
            $table->string('mfg_unit')->nullable();
            $table->string('volts_exitation')->nullable();
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
        Schema::dropIfExists('generators');
    }
}
