<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nomor_induk_berusahas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('akte_perusahaan')->nullable();
            $table->string('ktp');
            $table->string('npwp');
            $table->string('sketsa_lokasi')->nullable();
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('deskripsi');
            $table->unsignedBigInteger('marketplace_id');
            $table->boolean('status')->default(false);

            $table->foreign('marketplace_id')->references('id')->on('market_places');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nomor_induk_berusahas');
    }
};
