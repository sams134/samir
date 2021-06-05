<?php

use App\Models\Internal\Job;
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
            $table->enum('equipment_type',[Job::EQUIPMENT_MOTOR_AC,2,34,5,6,7,8,9,10]);
            $table->unsignedBigInteger('job_type_id')->nullable();
            $table->unsignedBigInteger('auth_by_user')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('reason_for_service_id')->nullable();

            $table->foreign('job_type_id')->references('id')->on('job_types')->onDelete('set null');
            $table->foreign('auth_by_user')->references('id')->on('users')->onDelete('set null');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('reason_for_service_id')->references('id')->on('reason_for_services')->onDelete('set null');
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
