<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('year',10);
            $table->string('os',10);
            $table->date('date_received');
            $table->date('date_required')->nullable();
            $table->string('marks')->nullable();
            $table->unsignedBigInteger('job_type_id')->nullable();

            $table->foreign('job_type_id')->references('id')->on('job_types')->onDelete('set null');
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
        Schema::dropIfExists('jobs');
    }
}
