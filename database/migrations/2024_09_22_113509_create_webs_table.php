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
        Schema::create('webs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_web')->nullable();
            $table->string('logo')->nullable();
            $table->string('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('url')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('pemimpin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webs');
    }
};
