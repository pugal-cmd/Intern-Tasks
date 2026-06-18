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
        Schema::create('vendor_modal_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('business_name');
            $table->string('business_type');
            $table->string('city');
            $table->string('experience')->nullable();
            $table->string('equipment', 500)->nullable();
            $table->string('specialties', 1000)->nullable();
            $table->string('portfolio_url', 500)->nullable();
            $table->string('instagram_url', 500)->nullable();
            $table->text('about')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_modal_registrations');
    }
};