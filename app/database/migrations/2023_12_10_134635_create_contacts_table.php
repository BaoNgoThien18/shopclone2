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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('zalo')->nullable(); // Thêm cột Zalo
            $table->string('facebook')->nullable(); // Thêm cột Facebook
            $table->string('telegram')->nullable(); // Thêm cột Telegram
            $table->string('phone_number')->nullable(); // Thêm cột SĐT
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
