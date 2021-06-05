<?php

use App\Models\Internal\Pump;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePumpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pumps', function (Blueprint $table) {
            $table->id();
            $table->enum('types',[Pump::PUMP_TYPE_CENTRIFUGAL,Pump::PUMP_TYPE_SUBMERSIBLE,Pump::PUMP_TYPE_MULTISTAGE,Pump::PUMP_TYPE_OTHER]);
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
        Schema::dropIfExists('pumps');
    }
}
