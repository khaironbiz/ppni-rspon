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
        Schema::create('class_events', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(\App\Models\Event::class);
            $table->foreignIdFor(\App\Models\Training::class)->nullable();
            $table->foreignIdFor(\App\Models\CurriculumVersion::class)->nullable();
            $table->string('id_penyelenggara')->nullable();
            $table->string('title');
            $table->date('date_start');
            $table->date('date_finish');
            $table->string('file')->nullable();
            $table->string('class_type')->nullable();//online/tatap muka/blended learning
            $table->string('tempat')->nullable();
            $table->string('toc')->nullable();
            $table->string('mot')->nullable();
            $table->text('canva_url')->nullable();
            $table->text('description')->nullable();
            $table->string('slug');
            $table->foreignIdFor(\App\Models\User::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_events');
    }
};
