<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('hosted_by')->constrained('users');
            $table->string('title_en')->unique();
            $table->string('title_bn')->nullable()->unique();
            $table->text('description_en');
            $table->text('description_bn')->nullable();
            $table->integer('duration_hours')->default(0);
            $table->integer('duration_minutes')->default(10);
            $table->date('date')->default(date("Y-m-d"));
            $table->time('start_time')->default("10:00:00");
            $table->string('video_link')->nullable();
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
        Schema::dropIfExists('trainings');
    }
}
