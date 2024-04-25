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
        Schema::create('user_hobby', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hobby_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('hobby_id')->references('id')->on('hobbies')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_hobby');
    }
};
