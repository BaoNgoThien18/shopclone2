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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('stt')->default(0);
            $table->integer('user_id');
            $table->integer('category_id')->default(0);
            $table->text('name');
            $table->text('flag');
            $table->float('cost')->default(0);
            $table->text('content')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->integer('status')->default(1);
            $table->text('preview');
            $table->integer('sold')->default(0);
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
