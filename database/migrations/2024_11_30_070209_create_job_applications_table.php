<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    public function up()
{
    Schema::create('job_applications', function (Blueprint $table) {
        $table->id();
        $table->foreignId('job_id')->constrained()->onDelete('cascade');
        $table->string('applicant_name');
        $table->string('applicant_email');
        $table->text('message')->nullable();
        $table->string('resume')->nullable();
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}
