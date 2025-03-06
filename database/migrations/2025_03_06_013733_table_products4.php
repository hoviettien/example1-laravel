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
        Schema::create('products4', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->foreignId('id_type')->constrained('type_products');
            $table->text('description');
            $table->float('unit_price');
            $table->float('promotion_price');
            $table->string('image', 255);
            $table->string('unit', 255);
            $table->timestamps();
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
