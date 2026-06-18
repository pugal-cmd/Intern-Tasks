<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('creators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('specialty')->nullable();
            $table->string('portfolio')->nullable();
            $table->text('bio')->nullable();
            $table->string('city')->nullable();
            $table->string('status')->default('pending'); // pending, active, inactive
            $table->boolean('featured')->default(false);
            $table->decimal('rating', 3, 1)->default(0);
            $table->integer('reviews_count')->default(0);
            $table->string('badge')->nullable(); // Pro, New, etc.
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('creators');
    }
};