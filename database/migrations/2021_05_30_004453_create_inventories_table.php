<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('frame')->default(1);
            $table->string('frame_comment')->nullable();

            $table->tinyInteger('endbracket_de')->default(1);
            $table->string('endbracket_de_comment')->nullable();

            $table->tinyInteger('endbracket_nde')->default(1);
            $table->string('endbracket_nde_comment')->nullable();

            $table->tinyInteger('conection_box')->default(1);
            $table->string('conection_box_comment')->nullable();

            $table->tinyInteger('coupling')->default(1);
            $table->string('coupling_comment')->nullable();

            $table->tinyInteger('shaft')->default(1);
            $table->string('shaft_comment')->nullable();

            $table->tinyInteger('fan')->default(1);
            $table->string('fan_comment')->nullable();

            $table->tinyInteger('fan_cover')->default(1);
            $table->string('fan_cover_comment')->nullable();

            $table->tinyInteger('covers')->default(1);
            $table->string('covers_comment')->nullable();

            $table->tinyInteger('leads')->default(1);
            $table->string('leads_comment')->nullable();

            $table->tinyInteger('eyebolts')->default(1);
            $table->string('eyebolts_comment')->nullable();

            $table->tinyInteger('nameplate')->default(1);
            $table->string('nameplate_comment')->nullable();

            $table->tinyInteger('heaters')->default(1);
            $table->string('heaters_comment')->nullable();

            $table->tinyInteger('stator_core')->default(1);
            $table->string('tator_core_comment')->nullable();

            $table->tinyInteger('rotor')->default(1);
            $table->string('rotor_comment')->nullable();

            $table->tinyInteger('slip_rings')->default(1);
            $table->string('slip_rings_comment')->nullable();

            $table->tinyInteger('capacitor')->default(1);
            $table->string('capacitor_comment')->nullable();

            $table->tinyInteger('brush_holders')->default(1);
            $table->string('brush_holders_comment')->nullable();

            $table->tinyInteger('brushes')->default(1);
            $table->string('brushes_comment')->nullable();

            $table->tinyInteger('base')->default(1);
            $table->string('base_comment')->nullable();

            $table->tinyInteger('terminal_block')->default(1);
            $table->string('terminal_block_comment')->nullable();

            $table->tinyInteger('bolts')->default(1);
            $table->string('bolts_comment')->nullable();

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
        Schema::dropIfExists('inventories');
    }
}
