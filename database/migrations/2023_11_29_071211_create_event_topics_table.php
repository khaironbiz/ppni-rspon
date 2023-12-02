<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event_topics', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(\App\Models\SubjectStudy::class);
            $table->bigInteger('module_id')->default(1);
            $table->bigInteger('pengajar')->default(1);
            $table->integer('jpl');
            $table->string('metode');
            $table->string('title');
            $table->dateTime('time_open');
            $table->dateTime('time_close');
            $table->bigInteger('created_by')->default(1);
            $table->string('slug');
            $table->string('canva');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_topics');
    }
};
