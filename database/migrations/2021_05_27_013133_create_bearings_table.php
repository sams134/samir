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
            $table->string('name');
            $table->enum('seals',[Bearing::SEALS_NO_SEAL,Bearing::SEALS_ZZ,Bearing::SEALS_2RS1,Bearing::SEALS_Z])->default(Bearing::SEALS_NO_SEAL);
            $table->enum('radial_clerance',[Bearing::RADIAL_CLERANCE_C2,Bearing::RADIAL_CLERANCE_C3,Bearing::RADIAL_CLERANCE_C4])->default(Bearing::RADIAL_CLERANCE_C2);
            $table->tinyInteger('snap_ring')->default(0);
            $table->tinyInteger('high_temperature_grease')->default(0);
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
