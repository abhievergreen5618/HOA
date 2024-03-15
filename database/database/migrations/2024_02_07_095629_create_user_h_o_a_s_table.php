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
        Schema::create('user_h_o_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('hoa_name');
            $table->string('contact_person')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('comments')->nullable();
            $table->json('photos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_h_o_a_s');
    }
};
