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
        Schema::create('property_managers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('current_date');
            $table->string('who');
            $table->string('hoa');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('address2');
            $table->string('city2');
            $table->string('state2');
            $table->string('zip2');
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_managers');
    }
};
