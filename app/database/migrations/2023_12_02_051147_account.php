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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('trans_id')->nullable();
            $table->string('seller')->nullable();
            $table->string('buyer')->nullable();
            $table->text('account');
            $table->timestamps(); // Adds created_at and updated_at columns
            $table->index('product_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');

    }
};
