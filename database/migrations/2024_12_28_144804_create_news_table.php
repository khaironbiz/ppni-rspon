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
        Schema::create('news', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->nullable();
            $table->foreignIdFor(\App\Models\User::class,'author')->nullable();
            $table->foreignIdFor(\App\Models\Code::class, 'news_category')->nullable();
            $table->bigInteger('view')->nullable();
            $table->string('poster')->nullable();
            $table->foreignIdFor(\App\Models\User::class,'created_by')->nullable();
            $table->date('publish')->nullable();
            $table->date('stop')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
