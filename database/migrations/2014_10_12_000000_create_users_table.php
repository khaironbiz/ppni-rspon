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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('gender')->nullable();
            $table->bigInteger('nik')->unique();
            $table->string('email')->unique();
            $table->string('nomor_telepon')->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('status_menikah')->nullable();;
            $table->string('tempat_kerja')->nullable();;
            $table->string('status_pekerjaan')->nullable();;
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role');
            $table->string('foto');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
