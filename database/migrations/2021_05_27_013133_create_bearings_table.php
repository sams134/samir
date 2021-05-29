<?php

use App\Models\Materials\Bearing;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBearingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bearings', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('full_designation')->nullable();
            $table->tinyInteger('seals')->default(Bearing::SEALS_NO_SEAL);
            $table->tinyInteger('radial_clerance')->default(Bearing::RADIAL_CLERANCE_C2);
            $table->tinyInteger('cage')->default(Bearing::CAGE_METAL);
            $table->tinyInteger('snap_ring')->default(0);
            $table->tinyInteger('high_temperature_grease')->default(0);
            $table->tinyInteger('insulated')->default(0);
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
        Schema::dropIfExists('bearings');
    }
}
