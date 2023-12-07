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
        Schema::create('task_answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(\App\Models\Task::class);
            $table->foreignIdFor(\App\Models\Training::class);
            $table->foreignIdFor(\App\Models\ClassEvent::class);
            $table->uuid('jenis_tugas');
            $table->uuid('student_id');
            $table->integer('nilai')->nullable();
            $table->dateTime('date_start')->nullable();
            $table->dateTime('date_finish')->nullable();
            $table->enum('status',['open','close'])->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_answers');
    }
};
