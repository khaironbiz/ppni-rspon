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
        Schema::create('task_answer_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(\App\Models\User::class);
            $table->foreignIdFor(\App\Models\TaskAnswer::class);
            $table->foreignIdFor(\App\Models\Question::class);
            $table->text('description')->nullable();
            $table->string('youtube_id_video')->nullable();
            $table->uuid('id_jawaban')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_answer_details');
    }
};
