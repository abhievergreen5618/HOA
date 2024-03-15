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
        Schema::create('communities', function (Blueprint $table) {
            $table->id();
            $table->string('county');
            $table->string('community');
            $table->string('hoa_or_non');
            $table->string('status_type');
            $table->string('community_type');
            $table->string('community_legal_name');
            $table->string('also_known');
            $table->string('date');
            $table->string('id_number');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communities');
    }
};
