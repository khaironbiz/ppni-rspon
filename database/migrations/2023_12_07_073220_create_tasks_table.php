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
        Schema::create('tasks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(\App\Models\ClassEvent::class);
            $table->foreignIdFor(\App\Models\Training::class);
            $table->uuid('jenis_tugas');
            $table->text('description')->nullable();
            $table->uuid('teacher_id');
            $table->dateTime('date_start');
            $table->dateTime('date_finish');
            $table->enum('status',['open','close'])->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
