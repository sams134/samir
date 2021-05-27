<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\External\Motor;

class CreateMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('inventory')->nullable();
            $table->string('mfg')->nullable();
            $table->string('model')->nullable();
            $table->string('serial')->nullable();
            $table->string('power')->nullable();
            $table->enum('hpkw',[Motor::HP,Motor::KW,Motor::KVA,Motor::WATTS,Motor::TORQUE]);
            $table->string('speed')->nullable();
            $table->string('voltages')->nullable();
            $table->string('currents')->nullable();
            $table->string('frame')->nullable();
            $table->string('efficiency')->nullable();
            $table->string('pf')->nullable();
            $table->tinyInteger('real_data');
            $table->enum('motor_type',[Motor::SINGLE_PHASE,Motor::THREE_PHASE,Motor::DC_MOTOR,Motor::SERVO]);
            $table->unsignedBigInteger('machine_id');
            $table->foreign('machine_id')->references('id')->on('machines')->onDelete('cascade');
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
        Schema::dropIfExists('motors');
    }
}
