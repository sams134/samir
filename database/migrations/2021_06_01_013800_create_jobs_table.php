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
            $table->string('auth_by_customer')->nullable();
            $table->unsignedBigInteger('job_type_id')->nullable();
            $table->unsignedBigInteger('auth_by_user')->nullable();
            $table->unsignedBigInteger('customer_id');

            $table->foreign('job_type_id')->references('id')->on('job_types')->onDelete('set null');
            $table->foreign('auth_by_user')->references('id')->on('users')->onDelete('set null');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
