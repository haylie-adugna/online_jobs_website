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
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key with cascading delete
            $table->string('title');
            $table->text('description');
            $table->string('company');
            $table->string('location')->nullable();
            $table->enum('type', ['full-time', 'part-time', 'contract', 'internship']);
            $table->decimal('salary', 15, 2)->nullable(); // Adjust precision as needed
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps(); // Created at and updated at timestamps
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
