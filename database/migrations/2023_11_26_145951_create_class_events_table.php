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
            $table->id();
            $table->bigInteger('event_id');
            $table->string('title');
            $table->date('date_start');
            $table->date('date_finish');
            $table->string('file')->nullable();
            $table->text('canva_url');
            $table->text('description');
            $table->string('slug');
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