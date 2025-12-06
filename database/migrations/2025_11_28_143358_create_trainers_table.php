<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('trainers', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('gym_id');
        $table->string('name');
        $table->timestamps();

        $table->foreign('gym_id')->references('id')->on('gyms')->onDelete('cascade');
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
