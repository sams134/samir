<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransformersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transformers', function (Blueprint $table) {
            $table->id();
            $table->string('mfg',100)->nullable();
            $table->string('power',30)->nullable();
            $table->tinyInteger('kwkva')->nullable();
            $table->string('serial',100)->nullable();
            $table->string('model',100)->nullable();
            $table->string('voltages_in',30)->nullable();
            $table->string('voltages_out',30)->nullable();
            $table->string('connection_in',30)->nullable();
            $table->string('connection_out',30)->nullable();
            $table->tinyInteger('phases')->nullable();
            $table->tinyInteger('insulation_class')->nullable();
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
        Schema::dropIfExists('transformers');
    }
}
