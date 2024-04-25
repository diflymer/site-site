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
        Schema::table('users', function (Blueprint $table) {
            $table->string('login');
            $table->string('surname');
            $table->string('fatherName')->nullable();
            $table->string('city');
            $table->date('birthdate');
            $table->string('phone');
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('login');
            $table->dropColumn('surname');
            $table->dropColumn('fatherName');
            $table->dropColumn('city');
            $table->dropColumn('birthdate');
            $table->dropColumn('phone');
          });
    }
};
